<?php
session_start();
require 'config.php';
require 'vendor/autoload.php';

use Razorpay\Api\Api;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');
$postData = json_decode(file_get_contents('php://input'), true);

function convertToMySQLDate($dateStr) {
    if (!$dateStr) return null;
    $date = DateTime::createFromFormat('d/m/Y', $dateStr)
        ?: DateTime::createFromFormat('Y-m-d', $dateStr)
        ?: DateTime::createFromFormat('m/d/Y', $dateStr);
    if (!$date) {
        $time = strtotime($dateStr);
        return $time ? date('Y-m-d', $time) : null;
    }
    return $date->format('Y-m-d');
}

$razorpay_payment_id = $postData['razorpay_payment_id'] ?? '';
$razorpay_order_id   = $postData['razorpay_order_id'] ?? '';
$razorpay_signature  = $postData['razorpay_signature'] ?? '';
$name                = $postData['name'] ?? '';
$phone               = $postData['phone'] ?? '';
$email               = $postData['email'] ?? '';
$checkin_date_raw    = $postData['checkin_date'] ?? '';
$checkout_date_raw   = $postData['checkout_date'] ?? '';
$adults              = $postData['adults'] ?? '';
$children            = $postData['children'] ?? '';
$room_type           = $postData['room_type'] ?? '';
$amount_paid         = $postData['amount'] ?? 0;

$checkin_date  = convertToMySQLDate($checkin_date_raw);
$checkout_date = convertToMySQLDate($checkout_date_raw);
$amount_display = $amount_paid ? (number_format($amount_paid / 100, 2)) : 'N/A';

if (!$razorpay_payment_id || !$razorpay_order_id || !$razorpay_signature) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing payment parameters']);
    exit();
}
if (!$name || !$phone || !$email || !$checkin_date || !$checkout_date || !$adults || !$room_type) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing booking information']);
    exit();
}

try {
    $api = new Api('rzp_live_RRpddNdCYcv0eu', 'fU1ixjdRseKdk5438KHzQag0');
    $attributes = [
        'razorpay_order_id'   => $razorpay_order_id,
        'razorpay_payment_id' => $razorpay_payment_id,
        'razorpay_signature'  => $razorpay_signature
    ];
    $api->utility->verifyPaymentSignature($attributes);

    $stmt = $conn->prepare("INSERT INTO reservations (name, phone, email, checkin_date, checkout_date, adults, children, room_type, created_at, status, transaction_id, razorpay_order_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), 'completed', ?, ?)");
    $stmt->bind_param(
        "sssssiisss",
        $name, $phone, $email, $checkin_date, $checkout_date, $adults, $children, $room_type, $razorpay_payment_id, $razorpay_order_id
    );
    $stmt->execute();
    $reservation_id = $stmt->insert_id;
    $stmt->close();

    // ------- PHPMailer Setup with Debug --------
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 2; // Change to 4 for extra verbosity
        $mail->Debugoutput = function($str, $level) { error_log("PHPMailer: $str"); };
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'suryahotel025@gmail.com';
        $mail->Password   = 'oona wdme zzht kjjt'; // Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->setFrom('suryahotel025@gmail.com', 'Surya Hotel & Family Lodge');
        $mail->addAddress($email, $name);
        if (file_exists(__DIR__ . '/images/logo.png')) {
            $mail->addEmbeddedImage(__DIR__ . '/images/logo.png', 'hotel_logo');
        }

        $mail->Subject = 'Surya Hotel & Family Lodge - Booking Confirmation';
        $detailsTable = "
        <table style='width:100%;border-collapse:collapse;background:#fafbfc;margin-top:10px;'>
            <tr><td style='padding:6px;border:1px solid #ddd;'>Name</td><td style='padding:6px;border:1px solid #ddd;'><strong>$name</strong></td></tr>
            <tr><td style='padding:6px;border:1px solid #ddd;'>Phone</td><td style='padding:6px;border:1px solid #ddd;'><strong>$phone</strong></td></tr>
            <tr><td style='padding:6px;border:1px solid #ddd;'>Email</td><td style='padding:6px;border:1px solid #ddd;'><strong>$email</strong></td></tr>
            <tr><td style='padding:6px;border:1px solid #ddd;'>Room Type</td><td style='padding:6px;border:1px solid #ddd;'><strong>$room_type</strong></td></tr>
            <tr><td style='padding:6px;border:1px solid #ddd;'>Amount Paid</td><td style='padding:6px;border:1px solid #ddd;'><strong>₹$amount_display</strong></td></tr>
            <tr><td style='padding:6px;border:1px solid #ddd;'>Check-in Date</td><td style='padding:6px;border:1px solid #ddd;'><strong>$checkin_date</strong></td></tr>
            <tr><td style='padding:6px;border:1px solid #ddd;'>Check-out Date</td><td style='padding:6px;border:1px solid #ddd;'><strong>$checkout_date</strong></td></tr>
        </table>";

        $mail->isHTML(true);
        $mail->Body = '
        <div style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" 
                   style="max-width: 600px; background: #ffffff; border: 1px solid #ddd; border-radius: 8px;">
                <tr>
                    <td align="center" style="padding: 20px 0; border-bottom: 2px solid #f1f1f1;">
                        ' . (file_exists(__DIR__ . '/images/logo.png') ? 
                            '<img src="cid:hotel_logo" alt="Surya Hotel Logo" width="100%" height="250" style="margin-bottom:10px;">' : '') . '
                        <h2 style="margin: 0; color: #333;">Surya Hotel & Family Lodge</h2>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 30px;">
                        <div style="border: 1px solid #ccc; border-radius: 6px; padding: 20px;">
                            <p style="font-size: 16px; color: #333;">
                                <strong>Dear ' . htmlspecialchars($name) . ',</strong>
                            </p>
                            <p style="font-size: 15px; color: #555; line-height: 1.6;">
                                Thank you for booking with <strong>Surya Hotel & Family Lodge</strong>.<br>
                                Your reservation is confirmed! Here are your booking details:
                            </p>
                            ' . $detailsTable . '
                            <p style="font-size: 15px; color: #555; line-height: 1.6; margin-top:15px;">
                                If you have any questions or need assistance with your stay, just reply to this email or call our reception.
                            </p>
                            <p style="margin-top: 20px; font-size: 15px; color: #333;">
                                Warm regards,<br>
                                <strong>Team Surya Hotel & Family Lodge</strong>
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="background-color: #f7f7f7; padding: 15px; font-size: 13px; color: #777;">
                        © 2025 Surya Hotel & Family Lodge<br>
                        <a href="#" style="color: #777; text-decoration: none;">www.suryahotelfamilylodge.com</a>
                    </td>
                </tr>
            </table>
        </div>
        ';
        $mail->AltBody = "Dear $name, Thank you for booking Surya Hotel & Family Lodge. Your reservation is confirmed.\n".
            "Name: $name\nPhone: $phone\nEmail: $email\nRoom Type: $room_type\nAmount Paid: ₹$amount_display\nCheck-in: $checkin_date\nCheck-out: $checkout_date\n";
        $mail->send();
    } catch (Exception $e) {
        error_log('Mailer Error: ' . $mail->ErrorInfo);
    }

    echo json_encode(['success' => true, 'reservation_id' => $reservation_id]);
} catch (Exception $e) {
    error_log("Razorpay signature verification error: " . $e->getMessage());
    http_response_code(400);
    echo json_encode(['error' => 'Signature verification failed: ' . $e->getMessage()]);
    exit();
}
?>

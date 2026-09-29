<?php
require 'config.php'; // ensures $conn is available
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Get today's date in MySQL format
$today = date('Y-m-d');

// --------- SEND CHECK-IN EMAILS ----------
$checkinStmt = $conn->prepare("SELECT name, phone, email, room_type, checkin_date FROM reservations WHERE checkin_date = ?");
$checkinStmt->bind_param("s", $today);
$checkinStmt->execute();
$checkinResult = $checkinStmt->get_result();

while ($row = $checkinResult->fetch_assoc()) {
    $subject = "Surya Hotel & Family Lodge - Check-in Notice";
    $bodyHtml = '
    <div style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" 
               style="max-width: 600px; background: #ffffff; border: 1px solid #ddd; border-radius: 8px;">
            <tr>
                <td align="center" style="padding: 20px 0; border-bottom: 2px solid #f1f1f1;">
                    <img src="cid:hotel_logo" alt="Surya Hotel Logo" width="100%" height="250" style="margin-bottom:10px;">
                    <h2 style="margin: 0; color: #333;">Surya Hotel & Family Lodge</h2>
                </td>
            </tr>
            <tr>
                <td style="padding: 30px;">
                    <div style="border: 1px solid #ccc; border-radius: 6px; padding: 20px;">
                        <p style="font-size: 16px; color: #333;">
                            <strong>Dear '.htmlspecialchars($row['name']).',</strong>
                        </p>
                        <p style="font-size: 15px; color: #555; line-height: 1.6;">
                            This is a reminder that <strong>today ('.date('d M Y', strtotime($row['checkin_date'])).')</strong> is your check-in date at <b>Surya Hotel & Family Lodge</b>.
                        </p>
                        <p style="font-size: 15px; color: #555;">
                            <b>Room Type:</b> '.htmlspecialchars($row['room_type']).'<br>
                            <b>Phone Number:</b> '.htmlspecialchars($row['phone']).'
                        </p>
                        <p style="font-size: 15px; color: #555; line-height: 1.6;">
                            We look forward to welcoming you!
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
                    <a href="#" style="color: #777; text-decoration: none;">www.suryahotel.com</a>
                </td>
            </tr>
        </table>
    </div>
    ';
    sendEmailWithLogo($row['email'], $row['name'], $subject, $bodyHtml);
}
$checkinStmt->close();

// --------- SEND CHECKOUT EMAILS ----------
$checkoutStmt = $conn->prepare("SELECT name, phone, email, room_type, checkout_date FROM reservations WHERE checkout_date = ?");
$checkoutStmt->bind_param("s", $today);
$checkoutStmt->execute();
$checkoutResult = $checkoutStmt->get_result();

while ($row = $checkoutResult->fetch_assoc()) {
    $subject = "Surya Hotel & Family Lodge - Checkout Notice";
    $bodyHtml = '
    <div style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" 
               style="max-width: 600px; background: #ffffff; border: 1px solid #ddd; border-radius: 8px;">
            <tr>
                <td align="center" style="padding: 20px 0; border-bottom: 2px solid #f1f1f1;">
                    <img src="cid:hotel_logo" alt="Surya Hotel Logo" width="100%" height="250" style="margin-bottom:10px;">
                    <h2 style="margin: 0; color: #333;">Surya Hotel & Family Lodge</h2>
                </td>
            </tr>
            <tr>
                <td style="padding: 30px;">
                    <div style="border: 1px solid #ccc; border-radius: 6px; padding: 20px;">
                        <p style="font-size: 16px; color: #333;">
                            <strong>Dear '.htmlspecialchars($row['name']).',</strong>
                        </p>
                        <p style="font-size: 15px; color: #555; line-height: 1.6;">
                            This is a kind reminder that <strong>today ('.date('d M Y', strtotime($row['checkout_date'])).')</strong> is your checkout date from <b>Surya Hotel & Family Lodge</b>.
                        </p>
                        <p style="font-size: 15px; color: #555;">
                            <b>Room Type:</b> '.htmlspecialchars($row['room_type']).'<br>
                            <b>Phone Number:</b> '.htmlspecialchars($row['phone']).'
                        </p>
                        <p style="font-size: 15px; color: #555; line-height: 1.6;">
                            We sincerely hope you had a comfortable and pleasant stay with us.
                        </p>
                        <p style="font-size: 15px; color: #555; line-height: 1.6;">
                            If you have any feedback or need assistance, please reply to this email or contact our reception.
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
                    <a href="#" style="color: #777; text-decoration: none;">www.suryahotel.com</a>
                </td>
            </tr>
        </table>
    </div>
    ';
    sendEmailWithLogo($row['email'], $row['name'], $subject, $bodyHtml);
}
$checkoutStmt->close();

// ------------------- EMAIL SENDING FUNCTION ---------------------
function sendEmailWithLogo($to, $name, $subject, $bodyHtml) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'suryahotel025@gmail.com'; // Your Gmail
        $mail->Password   = 'oona wdme zzht kjjt';     // Your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('suryahotel025@gmail.com', 'Surya Hotel & Family Lodge');
        $mail->addAddress($to, $name);
        $mail->Subject = $subject;

        // Embed your local logo image
        $mail->addEmbeddedImage(__DIR__ . '/images/logo.png', 'hotel_logo');

        $mail->isHTML(true);
        $mail->Body    = $bodyHtml;
        $mail->AltBody = strip_tags($bodyHtml);

        $mail->send();
    } catch (Exception $e) {
        error_log('Reminder mailer error: ' . $mail->ErrorInfo);
    }
}
?>

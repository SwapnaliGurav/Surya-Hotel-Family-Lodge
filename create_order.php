<?php
require 'config.php';
require 'vendor/autoload.php';

use Razorpay\Api\Api;

header('Content-Type: application/json');

// Capture POST JSON input
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['room_type'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Room type not specified']);
    exit();
}

$room_type = $data['room_type'];

// Map room type to price in paise
$room_prices = [
    'Family' => 1400 * 100,
    'Standard' => 800 * 100,
    'Premium' => 1100 * 100,
];

if (!array_key_exists($room_type, $room_prices)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid room type']);
    exit();
}

$amount_paise = $room_prices[$room_type];

if ($amount_paise < 100) {
    http_response_code(400);
    echo json_encode(['error' => 'Amount is too low']);
    exit();
}

try {
    $api_key = 'rzp_live_RRpddNdCYcv0eu';
    $api_secret = 'fU1ixjdRseKdk5438KHzQag0';
    $api = new Api($api_key, $api_secret);

    $orderData = [
        'receipt' => 'rcptid_' . time(),
        'amount' => $amount_paise,
        'currency' => 'INR',
        'payment_capture' => 1
    ];

    $razorpayOrder = $api->order->create($orderData);

    echo json_encode([
        'id' => $razorpayOrder['id'],
        'amount' => $razorpayOrder['amount'],
        'amount_inr' => $amount_paise / 100,
    ]);
} catch (Exception $e) {
    error_log('Razorpay order creation failed: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'Order creation failed']);
    exit();
}

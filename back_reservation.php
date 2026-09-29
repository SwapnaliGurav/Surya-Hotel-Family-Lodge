<?php
session_start();
require 'config.php';

// Function for date conversion
function convertToMySQLDate($dateStr) {
    $date = DateTime::createFromFormat('d/m/Y', $dateStr) ?: DateTime::createFromFormat('m/d/Y', $dateStr);
    if (!$date) {
        $time = strtotime($dateStr);
        return $time ? date('Y-m-d', $time) : null;
    }
    return $date->format('Y-m-d');
}

// Sanitize inputs
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$checkin_date = convertToMySQLDate(trim($_POST['checkin_date'] ?? ''));
$checkout_date = convertToMySQLDate(trim($_POST['checkout_date'] ?? ''));
$adults = intval($_POST['adults'] ?? 0);
$children = intval($_POST['children'] ?? 0);
$room_type = trim($_POST['room_type'] ?? '');

$room_prices = [
    'Family' => 1400,
    'Standard' => 800,
    'Premium' => 1100,
];

$errors = [];
if (!$name) $errors[] = "Name is required.";
if (!$phone || !preg_match('/^[0-9]{10}$/', $phone)) $errors[] = "Valid 10-digit phone number is required.";
if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";
if (!$checkin_date) $errors[] = "Valid check-in date is required.";
if (!$checkout_date) $errors[] = "Valid check-out date is required.";
if ($checkin_date && $checkout_date && new DateTime($checkout_date) <= new DateTime($checkin_date)) $errors[] = "Check-out date must be after check-in date.";
if ($adults < 1) $errors[] = "At least one adult must be specified.";
if (!isset($room_prices[$room_type])) $errors[] = "Valid room type must be selected.";

if (!empty($errors)) {
    $_SESSION['message'] = implode('<br>', $errors);
    $_SESSION['message_type'] = 'error';
    header("Location: reservation.php");
    exit();
}

// Store form data in session for payment usage
$_SESSION['booking'] = [
    'name' => $name,
    'phone' => $phone,
    'email' => $email,
    'checkin_date' => $checkin_date,
    'checkout_date' => $checkout_date,
    'adults' => $adults,
    'children' => $children,
    'room_type' => $room_type,
    'total_amount' => $room_prices[$room_type]
];

// Redirect back to reservation page where payment will be triggered inline
header("Location: reservation.php");
exit();

<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking_id = $_POST['booking_id'];
    $room_type = $_POST['room_type'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];

    $sql = "UPDATE bookings SET room_type = ?, check_in_date = ?, check_out_date = ? WHERE booking_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$room_type, $check_in_date, $check_out_date, $booking_id]);

    echo "Booking updated successfully!";
}
?>

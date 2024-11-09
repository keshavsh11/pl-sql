<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $guest_id = $_POST['guest_id'];
    $room_type = $_POST['room_type'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];

    $sql = "INSERT INTO bookings (guest_id, room_type, check_in_date, check_out_date) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$guest_id, $room_type, $check_in_date, $check_out_date]);

    echo "Booking added successfully!";
}
?>

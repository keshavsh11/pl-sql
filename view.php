<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View All Bookings</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>All Bookings</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Booking ID</th>
            <th>Guest ID</th>
            <th>Room Type</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Status</th>
        </tr>
        <?php
        // Include the database connection file
        include 'backend/connect.php';

        // Fetch all bookings from the bookings table
        $sql = "SELECT * FROM bookings";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $bookings = $stmt->fetchAll();

        // Loop through each booking and display it as a table row
        foreach ($bookings as $booking) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($booking['booking_id']) . "</td>";
            echo "<td>" . htmlspecialchars($booking['guest_id']) . "</td>";
            echo "<td>" . htmlspecialchars($booking['room_type']) . "</td>";
            echo "<td>" . htmlspecialchars($booking['check_in_date']) . "</td>";
            echo "<td>" . htmlspecialchars($booking['check_out_date']) . "</td>";
            echo "<td>" . htmlspecialchars($booking['status']) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

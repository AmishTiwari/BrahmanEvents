<?php include "config.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Brahman Events</title>
</head>
<body>

<h1>Upcoming Brahman Events</h1>

<?php
$sql = "SELECT * FROM events ORDER BY event_date ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div style='padding:10px; border:1px solid #ccc; margin:10px 0;'>";
        echo "<h3>" . $row['event_name'] . "</h3>";
        echo "<p>Date: " . $row['event_date'] . "</p>";
        echo "<p>Venue: " . $row['venue'] . "</p>";
        echo "</div>";
    }

} else {
    echo "<p>No events found.</p>";
}
?>

</body>
</html>

<?php include "config.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Event</title>
</head>
<body>

<h2>Add Brahman Event</h2>

<form method="POST" action="">
    <label>Event Name:</label>
    <input type="text" name="event_name" required><br><br>

    <label>Event Date:</label>
    <input type="date" name="event_date" required><br><br>

    <label>Venue:</label>
    <input type="text" name="venue" required><br><br>

    <button type="submit" name="submit">Save Event</button>
</form>

<?php
if (isset($_POST['submit'])) {

    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $venue = $_POST['venue'];

    $sql = "INSERT INTO events (event_name, event_date, venue)
            VALUES ('$event_name', '$event_date', '$venue')";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Event Saved Successfully!</p>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

</body>
</html>

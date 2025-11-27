<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brahman Event Dates</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>🕉️ Brahman Event Dates</h1>
        <p>Marriage • Ring Ceremony • Reception</p>
    </header>

    <section class="profile">
        <img src="couple.jpeg" alt="Couple Image">
        <h2>Rahul & Ragini</h2>
        <p>We are delighted to invite you to our auspicious ceremonies.</p>
    </section>

    <section class="events">
        <h2>Upcoming Events</h2>

        <div class="event-card">
            <h3>📿 Ring Ceremony</h3>
            <p>Date: <span>25 December 2025</span></p>
            <p>Venue: Vedic Marriage Hall, Lucknow</p>
        </div>

        <div class="event-card">
            <h3>👰 Marriage</h3>
            <p>Date: <span>27 December 2025</span></p>
            <p>Venue: Brahman Sanskriti Bhawan</p>
        </div>

        <div class="event-card">
            <h3>🎉 Reception</h3>
            <p>Date: <span>30 December 2025</span></p>
            <p>Venue: Royal Banquet Hall</p>
        </div>
    </section>

    <section class="countdown">
        <h2>Countdown To Marriage</h2>
        <div id="timer"></div>
    </section>

    <footer>
        <p>Made with ❤️ by Amish</p>
    </footer>

    <script src="script.js"></script>
</body>
</html> -->


<!-- 
?php include "config.php"; ?
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brahman Event Dates</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>🕉️ Brahman Event Dates</h1>
    <p>Marriage • Ring Ceremony • Reception</p>
</header>

<section class="profile">
    <img src="https://via.placeholder.com/150" alt="Couple Image">
    <h2>Rahul & Amisha</h2>
    <p>We are delighted to invite you to our auspicious ceremonies.</p>
</section>

<section class="events">
    <h2>Upcoming Events</h2>

    ?php
    // Fetch events from database
    $sql = "SELECT * FROM events ORDER BY event_date ASC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='event-card'>";
            echo "<h3>" . $row['event_name'] . "</h3>";
            echo "<p>Date: <span>" . $row['event_date'] . "</span></p>";
            echo "<p>Venue: " . $row['venue'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No events added yet.</p>";
    }
    ?>
</section>

<section class="countdown">
    <h2>Countdown To Marriage</h2>
    <div id="timer"></div>
</section>

<footer>
    <p>Made with ❤️ by Brahman Community</p>
</footer>

<script src="script.js"></script>
</body>
</html> -->




<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brahman Event Dates</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <h1>🕉️ Brahman Wedding Events</h1>
    <p class="subtitle">Marriage • Ring Ceremony • Reception</p>
</header>

<section class="profile">
    <img src="couple.jpeg" alt="Couple Image" class="profile-img">
    <h2 class="couple-name">Rahul & Amisha</h2>
    <p class="invite-text">We humbly invite you to bless our auspicious ceremonies.</p>
</section>

<section class="events-section">
    <h2 class="section-title">✨ Upcoming Events ✨</h2>

    <div class="events-container">
    <?php
    $sql = "SELECT * FROM events ORDER BY event_date ASC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <div class='event-card'>
                <h3 class='event-title'>" . $row['event_name'] . "</h3>
                <p class='event-date'>📅 " . $row['event_date'] . "</p>
                <p class='event-venue'>📍 " . $row['venue'] . "</p>
            </div>
            ";
        }

    } else {
        echo "<p class='no-events'>No events added yet.</p>";
    }
    ?>
    </div>
</section>

<section class="countdown">
    <h2 class="section-title">⏳ Countdown To Marriage</h2>
    <div id="timer" class="timer-box"></div>
</section>

<footer class="footer">
    <p>Made with ❤️ by Brahman Community</p>
</footer>

<script src="script.js"></script>
</body>
</html>

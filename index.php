<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <main>
        <form action="index.php" method="post">
            <h1>
                Will you be my valentine?
            </h1>

            <button type="submit" class="yes">yes</button>
            <button type="button" class="no">no</button>
        </form>
    </main>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        echo "<p>Thank you</p>";
    }
?>
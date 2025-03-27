<?php
// Check if the form has been submitted to set the cookie
if (isset($_POST['set_cookie'])) {
    // Set a cookie named "user" with a value and expiration time (1 hour from now)
    $user_name = $_POST['user_name']; // Get user input from the form
    setcookie("user", $user_name, time() + 3600, "/"); // Set cookie for 1 hour
    echo "Cookie has been set!<br>";
}

// Check if the cookie "user" is set and read it
if (isset($_COOKIE['user'])) {
    echo "Hello, " . $_COOKIE['user'] . "! Welcome back.<br>";
} else {
    echo "No user cookie found.<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Reader</title>
</head>
<body>

    <!-- Form to set a cookie -->
    <form method="post" action="">
        <label for="user_name">Enter your name to set a cookie: </label>
        <input type="text" name="user_name" id="user_name" required>
        <input type="submit" name="set_cookie" value="Set Cookie">
    </form>

    <!-- Button to read the cookie -->
    <button onclick="window.location.reload();">Refresh to Read Cookie</button>

</body>
</html>

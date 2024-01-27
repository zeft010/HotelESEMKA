<?php
session_start();
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check_username_query = "SELECT * FROM useraccount WHERE username = '$username'";
    $check_username_result = mysqli_query($connect, $check_username_query);
    if (mysqli_num_rows($check_username_result) > 0) {
        $error = "Username already exist.";
    } else {
        $insert_query = "INSERT INTO useraccount (username, password, type) VALUES ('$username', '$password', 0)";
        $insert_result = mysqli_query($connect, $insert_query);

        if ($insert_result) {
            header("Location: authentication.php");
            exit();
        } 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meikarta Hotel</title>
</head>
<body>
    <div class="authentication-container">
        <h2>Registration</h2>
        <?php if (isset($error)) : ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <p>Already have an account? <a href="authentication.php">Login here!</a></p>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>

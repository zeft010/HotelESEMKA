<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM useraccount WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) == 1) {
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = $user_data['type'];

            if ($user_data['type'] == 1) {
                header("Location: dashboard.php");
                exit();
            } elseif ($user_data['type'] == 0) {
                header("Location: user/index_registered.php");
                exit();
            }
        } else {
            $error = "*Invalid username or password";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="authentication-container">
    <a class="close_link" href="index.php">X</a>
        <h2>Login</h2>
        <?php if (isset($error)) : ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <p>Dont have account yet? <a href="registration.php">Sign up here!</a></p>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

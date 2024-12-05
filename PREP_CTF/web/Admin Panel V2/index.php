<?php
$PW = "04qW9IuwThw5Vu31evqj5k";
$FLAG = "flag{you_are_really_good_at_this}";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $admin = $_POST['admin'];

    if ($username === 'admin' && $password === $PW && $admin === 'true') {
        echo "Login successful!<br>";
        echo $FLAG;
    } else {
        echo "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form action="./" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
        <input type="hidden" value="<?php echo $PW ?>">
        <input type="hidden" id="admin" name="admin" value="false" required>
    </form>
</body>
</html>
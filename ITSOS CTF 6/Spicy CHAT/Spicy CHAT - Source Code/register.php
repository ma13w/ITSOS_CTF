<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    Just <a href="login.php">Log In</a> <hr>
    <form action="./register.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>


<?php
session_start();

// se ti stai registrando 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // salva il tuo username e password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ...
    if(!isset($_SESSION["username"])){
        // evita che usi il nome dell'admin !!
        if($username === "admin") {
            echo "Now you cannot use this username";
            exit();
        }
    }    
    
    // se è tutto giusto crea l'acccount
    $_SESSION[$username] = $username;
    $_SESSION[$password] = $password;
    echo "Your account has just been created";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    Just <a href="register.php">Sign Up</a> <hr>
    Let's <a href="index.php">CHAT</a> <hr>
    <form action="./login.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>

</body>
</html>


<?php
session_start();

// se ti stai loggando 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // salva il tuo username e password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // se l'account esiste, quindi è già registrato
    if(isset($_SESSION[$username])){        

        // controlla se l'username e la password sono giuste
        if(
            $_SESSION[$username] == $username &&
            $_SESSION[$password] == $password
        ){

            // configura alcune variabili per il corretto funzionamento della chat
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['FLAG'] = "flag{FAKE_FLAG}"; // la vera flag sarà qui
            $_SESSION[$username."chat"] = []; // i tuoi messaggi saranno qui

            echo "Login Successfully";
        }else{
            echo "Accont Not Found";
        }
    }else{
        echo "You need to Sign Up";
    }
}
?>

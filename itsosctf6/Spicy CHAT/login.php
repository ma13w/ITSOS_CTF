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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // salvo il tuo username e password
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_SESSION[$username])){        
        if(
            $_SESSION[$username] == $username &&
            $_SESSION[$password] == $password
        ){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['FLAG'] = "flag{y0u_4r3_r34dy_f0r_t3rr1t0r14l_s3l3ct10n}";
            $_SESSION[$username."chat"] = []; 

            echo "Login Successfully";
        }else{
            echo "Accont Not Found";
        }
    }else{
        echo "You need to Sign Up";
    }
}
?>

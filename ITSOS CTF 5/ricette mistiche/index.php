<?php
    session_start();
    $_SESSION['flag'] = "flag{m140_g4tt1n4}";
    $_SESSION['msg'] = "AbdelYouAreReallyBeautiful";
    $_SESSION['user_code'] = rand(10000, 99999);
    $_SESSION['msg_hash'] = "RsuvcPflRivIvrccpSvrlkzwlc";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione - Cucina Favolosa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            color: #d36e2e;
        }

        header p {
            color: #888;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #d36e2e;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #b95f29;
        }

        .cat-sound {
            text-align: center;
            font-style: italic;
            color: #555;
        }
    </style>

</head>

<body>
    <div class="container">
        <header>
            <h1>Benvenuto nel Sito di Cucina Favoloso</h1>
            <p>Iscriviti per ottenere ricette strabilianti!</p>
        </header>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            if ($username == "admin") {
                $_SESSION['username'] = "admin";
                header("Location: flag.php");
                exit;
            }
        }
        ?>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Conferma Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit">Registrati</button>
        </form>
        <footer>
            <p class="cat-sound">Miao Miao Miao...</p>
        </footer>
    </div>
</body>

</html>
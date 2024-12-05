<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #3498db, #8e44ad);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            animation: fadeIn 1s ease-in-out;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container .input-group {
            margin-bottom: 15px;
        }
        .container .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .container .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        .container .input-group input:focus {
            border-color: #3498db;
        }
        .container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #3498db;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .container button:hover {
            background: #2980b9;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="./" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="input-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="input-group">
                <input type="hidden" id="secret" name="secret" value="ZmxhZ3toMWRkMW5nXzU3dWZmXzE1X3IzNDExeV9jMDBsISF9">
            </div>
            <button type="submit">Sign Up</button>
        </form>

        <?php
        // flag{h1dd1ng_57uff_15_r3411y_c00l!!}
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];
            $phone = $_POST["phone"];
            $dob = $_POST["dob"];
            $address = $_POST["address"];
            $secret = $_POST["secret"];

            if ($secret !== "ZmxhZ3toMWRkMW5nXzU3dWZmXzE1X3IzNDExeV9jMDBsISF9") {
                echo "<p>Segreto non valido!</p>";
            } else if(strlen($phone) != 10) {
                echo "<p>Numero di telefono non valido!</p>";
            } else if($dob > "2003-01-01") {
                echo "<p>Devi essere piu grande!</p>";
            } else if($password != $confirm_password) {
                echo "<p>Password diverse!</p>";
            } else {
                echo "<p>Registrato al sito con successo!</p>";
            }
        }
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Cool Website</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            overflow: hidden;
        }
        .container {
            text-align: center;
            color: white;
        }
        h1 {
            font-size: 3em;
            animation: fadeIn 2s ease-in-out;
        }
        form {
            margin-top: 20px;
            animation: slideIn 2s ease-in-out;
        }
        input[type="email"] {
            padding: 10px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            background-color: #ff7e5f;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #feb47b;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .container div{
            margin-top: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Cool Website</h1>
        <form action="./" method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="submit" value="Submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header('X-Not-Flag: flag{ju57_4n_h34d3r_m1574k3}');
                echo "<div>Email successfully submitted.</div>";
            } else {
                echo "<div>Invalid email format.</div>";
            }
        }
        ?>
    </div>
</body>
</html>


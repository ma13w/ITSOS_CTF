<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coolest Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #f06, #4a90e2);
            font-family: Arial, sans-serif;
            color: white;
            overflow: hidden;
        }
        .container {
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }
        h1 {
            font-size: 4em;
            margin: 0;
            animation: slideIn 1s ease-in-out;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            background-color: #fff;
            color: #4a90e2;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        button:hover {
            background-color: #4a90e2;
            color: #fff;
            transform: scale(1.1);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateY(-100px); }
            to { transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Coolest Page</h1>
        <button id="cliccami">CLICCAMI!</button>
    </div>

    <script>
        document.getElementById('cliccami').addEventListener('click', function() {
            window.location.href = 'index.php?cliccami';
        });
    </script>

    <?php
        if (isset($_GET['cliccami'])) {
            echo "<script>alert('prima parte: flag{50n0_n45c0st4');</script>";
            echo "<script>console.log('seconda parte: _m0l70_b3n3}');</script>";
        }
    ?>
</body>
</html>
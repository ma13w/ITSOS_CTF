<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 50px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Cool Website</h1>
        <p>This is a simple PHP website with a deliberate issue.</p>
        <p>Current Date and Time: <?php echo date('Y-m-d H:i:s'); ?></p>
        <p>Random Number: <?php echo rand(1, 100); ?></p>
        <button onclick="console.log('flag{345y_c0d1ng_s7uff}')">Admin Login</button>
    </div>
</body>
</html>
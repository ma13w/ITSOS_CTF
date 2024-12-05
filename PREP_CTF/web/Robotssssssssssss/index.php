<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robots World</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #1a1a1a;
            color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #0d0d0d;
            color: #00ff99;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 2px -2px gray;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .main {
            padding: 20px;
            background: #333;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        footer {
            background-color: #0d0d0d;
            color: #00ff99;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -4px 2px -2px gray;
        }
        h1, h2 {
            color: #00ff99;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background: #444;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
            transition: background 0.3s;
        }
        ul li:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Robots World</h1>
        </div>
    </header>
    <div class="container">
        <div class="main">
            <h2>About Robots</h2>
            <p>Robots are machines capable of carrying out a complex series of actions automatically, especially ones programmable by a computer. They can be guided by an external control device or the control may be embedded within. Robots can be autonomous or semi-autonomous and range from humanoids to industrial robots, medical operating robots, patient assist robots, dog therapy robots, collectively programmed swarm robots, UAV drones such as General Atomics MQ-1 Predator, and even microscopic nano robots.</p>
            <h2>Types of Robots</h2>
            <ul>
                <li>Industrial Robots</li>
                <li>Service Robots</li>
                <li>Medical Robots</li>
                <li>Military Robots</li>
                <li>Entertainment Robots</li>
                <li>Space Robots</li>
            </ul>
        </div>
    </div>
    <footer>
        <p>&copy; 2023 Robot World. All rights reserved.</p>
    </footer>
</body>
</html>
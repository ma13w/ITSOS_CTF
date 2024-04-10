<!DOCTYPE html>
<html>

<head>
    <title>BTC get information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h2>Inserisci il corretto volume di BTC transati nel blocco</h2>

    <form action="" method="post">
        <?php
        $block_btc = 815389;
        echo "<label for='volume_btc'>Volume di bitcoin scambiati nel blocco $block_btc:";
        ?>

        <input type="text" id="volume_btc" name="volume_btc" step="any">
        <input type="submit" value="Verifica">
    </form>

    <?php
    // bitaps.com
    $FLAG = "flag{bl0ckch41n_1s_v3ry_fun}";
    $block_btc = 815389;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $volume_btc = 7088.13862067;

        if ($_POST["volume_btc"] == $volume_btc) {
            echo "Ecco la tua flag: $FLAG";
        } else {
            echo "Volume of BTC transacted is incorrect";
        }
    }
    ?>

</body>

</html>
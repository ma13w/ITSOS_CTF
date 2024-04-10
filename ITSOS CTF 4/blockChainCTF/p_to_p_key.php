<!DOCTYPE html>
<html lang="en">

<head>
    <title>Private to Public Key</title>
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
    <h2>Data una private key trova la public key</h2>
    <form method="post" action="">
        <?php
        $private_key = "L53S7bwx5Sdd2Twi1EnpAcubUFkXDjVnKw46pL8ZF7jd31X3x6rP";
        echo "<p><strong>private key:</strong> $private_key</p>"
            ?>
        <label for="stringaUtente">Inserisci la public key: </label>
        <input type="text" name="stringaUtente" id="stringaUtente" required>
        <input type="submit" value="Verifica">
    </form>

    <?php
    //https://bitaps.com/address
    $FLAG = "flag{s1mp4t1c1_1_t00ls}";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_input = $_POST["stringaUtente"];
        $public_key = "02c22ee7d568dbbda29e3e8795375f2b8e2e23a4dc852d9babeae0a58c7ca63331";

        if ($user_input === $public_key) {
            echo "<p>$FLAG</p>";
        } else {
            echo "<p>Chiave errata.</p>";
        }
    }

    ?>

</body>

</html>
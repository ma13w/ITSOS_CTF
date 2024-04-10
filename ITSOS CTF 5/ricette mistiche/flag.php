<?php
session_start();
if (!$_SESSION['flag'] || !$_SESSION['username']) {
    ob_end_clean();
    header("Location: index.php");
    echo "<h1>Passare per index.php</h1>";
    exit;
}

$FLAG = $_SESSION['flag'];
$codice_user = $_SESSION['user_code'];
$hash_correct = hash('sha256', strval($codice_user));
$msg = $_SESSION['msg'];

if (!isset($_SESSION['risultato'])) {
    list($operazione, $risultato) = generaOperazioneCasuale();
    $_SESSION['operazione'] = $operazione;
    $_SESSION['risultato'] = $risultato;
} else {
    $operazione = $_SESSION['operazione'];
    $risultato = $_SESSION['risultato'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        $_POST['input1'] == $hash_correct &&
        strval($_POST['input2']) == strval($risultato) &&
        $_POST['input3'] == $msg
    ) {
        echo "<p>$FLAG</p>";
    } else {
        list($operazione, $risultato) = generaOperazioneCasuale();
        $_SESSION['operazione'] = $operazione;
        $_SESSION['risultato'] = $risultato;
        header("Refresh:0");
        session_destroy();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Flag- Cucina Favolosa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e5f3ff;
            border-radius: 4px;
        }

        a{
            text-decoration: none;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Prendi la Flag</h2>
        <form action="flag.php" method="post">
            <div class="form-group">
                <label for="input1">Codifica in sha256:</label>
                <input type="text" id="input1" name="input1" placeholder="<?php echo $codice_user ?>">
            </div>
            <div class="form-group">
                <label for="input2">
                    <?php echo $operazione ?>
                </label>
                <?php echo $risultato ?>
                <input type="text" id="input2" name="input2" placeholder="Inserisci il risultato">
            </div>
            <div class="form-group">
                <label for="input3">Decodifica il messaggio</label>
                <button><a href="mysecretcode.php">Messggio cifrato</a></button>
                <input type="text" id="input3" name="input3" placeholder="Inserisci il messaggio decodificato">
            </div>
            <button type="submit" class="btn">Invia</button>
        </form>
</body>

</html>


<?php

function visitURL($url)
{
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        echo 'Errore durante la richiesta cURL: ' . curl_error($curl);
    }

    curl_close($curl);

    return $response;
}

function generaOperazioneCasuale() {
    // Array di operazioni disponibili
    $operazioni = array('+', '-');
    
    do {
        // Genera casualmente una sequenza di quattro operazioni
        $operazione1 = $operazioni[array_rand($operazioni)];
        $operazione2 = $operazioni[array_rand($operazioni)];
        $operazione3 = $operazioni[array_rand($operazioni)];

        // Genera casualmente quattro numeri
        $numero1 = mt_rand(1, 10); // Modifica il range secondo necessità
        $numero2 = mt_rand(1, 10); // Modifica il range secondo necessità
        $numero3 = mt_rand(1, 10); // Modifica il range secondo necessità
        $numero4 = mt_rand(1, 10); // Modifica il range secondo necessità

        $pow01 = mt_rand(1, 10);
        $pow02 = mt_rand(1, 10);
        $pow03 = mt_rand(1, 10);
        $pow04 = mt_rand(1, 10);

        $numero1M = $numero1 . "^" . $pow01;
        $numero2M = $numero2 . "^" . $pow02;
        $numero3M = $numero3 . "^" . $pow03;
        $numero4M = $numero4 . "^" . $pow04;
        
        // Costruisce l'operazione inserendo le parentesi per definire l'ordine delle operazioni
        $operazione = "$numero1M $operazione1 $numero2M $operazione2 $numero3M $operazione3 $numero4M";
        
        // Calcola il risultato dell'operazione composta
        $numero1 = pow($numero1, $pow01);
        $numero2 = pow($numero2, $pow02);
        $numero3 = pow($numero3, $pow03);
        $numero4 = pow($numero4, $pow04);

        $risultato = calcolaOperazione($numero1, $operazione1, $numero2);
        $risultato = calcolaOperazione($risultato, $operazione2, $numero3);
        $risultato = calcolaOperazione($risultato, $operazione3, $numero4);
        
    } while (!is_int($risultato));
    
    return array($operazione, $risultato);
}

function calcolaOperazione($numero1, $operazione, $numero2) {
    switch ($operazione) {
        case '+':
            return $numero1 + $numero2;
        case '-':
            return $numero1 - $numero2;
        case '*':
            return $numero1 * $numero2;
        case '^':
            return pow($numero1, $numero2);
    }
}


?>
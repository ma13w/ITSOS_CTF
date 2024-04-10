<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servizi API</title>
    <style>
        /* Questa parte non è funzionale alla risoluzione della ctf */
        body {font-family: Arial, sans-serif;margin: 0;padding: 0;background-color: #f2f2f2;}.container {max-width: 800px;margin: 20px auto;padding: 20px;background-color: #fff;border-radius: 8px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);}h1 {color: #333;text-align: center;}.unavailable {color: red;text-align: center;margin-bottom: 20px;}.button-container {display: flex;justify-content: center;}.button {padding: 10px 20px;margin: 0 10px;background-color: #007bff;color: #fff;border: none;border-radius: 5px;cursor: pointer;transition: background-color 0.3s ease;}.button:hover {background-color: #0056b3;}
    </style>
</head>

<body>
    <div class="container">
        <h1>Servizi API</h1>
        <div class="unavailable">Ecco un esempio di come usare le nostre API</div>
        <div class="button-container">
            <button class="button" onclick="window.location.href = 'getNotes.php';">Note dell'utente</button>
            <button class="button" onclick="window.location.href = 'getLog.php';">Log del sito</button>
            <button class="button" onclick="window.location.href = 'getUser.php';">Utenti registrati</button>
            <button class="button" onclick="window.location.href = 'getAnswer.php';">Risposte ai test</button>
            <!-- 
                TODO: impostare la richiesta come le altre
                <button class="button" onclick="window.location.href = 'flag.php';">Leggi la FLAG</button> 
            -->
        </div>
    </div>
</body>

</html>
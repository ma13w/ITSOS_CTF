<?php
session_start();

// controllo se hai fatto il login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// salva la chat
$username = $_SESSION['username'];
$chatHistory = isset($_SESSION['chat']) ? $_SESSION['chat'] : [];

// salva il messaggio
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["messageInput"])) {
    $message = $_POST["messageInput"];
    if (!empty($message)) {
        $chatHistory[] = htmlspecialchars($message);
        $_SESSION['chat'] = $chatHistory;
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();
    }
}
?>

<!-- semplice HTML per la chat -->
<!DOCTYPE html>
<html>
<head>
    <title>Let's chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="chat-container">
        <h2>Welcome, <?php echo $username; ?></h2>
        <div class="chat-box" id="chatBox">

            <?php foreach ($chatHistory as $message): ?>
                <!-- stampa di tutti i tuoi messaggi -->
                <div class="message self"><strong><?php echo $username; ?></strong>: <?php echo $message; ?></div>
            <?php endforeach; ?>

            <?php
                // stampa la flag !!
                if($username === "admin"){
                    echo $_SESSION["FLAG"];
                }
            ?>
        </div>

        <!-- casella di testo per inserire i messaggi -->
        <form class="input-box" method="POST" action="index.php">
            <input type="text" id="messageInput" name="messageInput" placeholder="Type your message...">
            <button id="sendMessageBtn" type="submit">Send</button>
        </form>
    </div>
</body>
</html>

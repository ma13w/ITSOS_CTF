<?php
session_start();
if (!$_SESSION['flag'] || !$_SESSION['username']) {
    ob_end_clean();
    echo "<h1>Passare prima per index.php</h1>";
    exit();
}

$msg_hash = $_SESSION['msg_hash'];

echo "Decode this: " . $msg_hash;

?>
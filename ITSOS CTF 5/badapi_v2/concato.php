<?php
if (
    $_SERVER["REQUEST_METHOD"] == "BARD"
) {
    echo "flag{b4st4v4_gu4rd4r3_b3n3_1_l0g}";
}
if (
    $_SERVER["REQUEST_METHOD"] == "GET"
) {
    echo "Sei sulla giusta strada... Controlla meglio";
}
?>
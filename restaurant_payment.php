
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $cardNumber = htmlspecialchars($_POST['cardNumber']);
    $expiry = htmlspecialchars($_POST['expiry']);
    $cvv = htmlspecialchars($_POST['cvv']);
    $amount = htmlspecialchars($_POST['amount']);

    // Simulated processing
    echo "Payment processed for $name of amount $$amount.";
}
?>

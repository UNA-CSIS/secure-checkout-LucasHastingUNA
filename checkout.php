<?php
    //See functions.php for references, contains functions
    require "functions.php";

    //start the session
    session_start();

    //change header if needed
    if_redirect();

    //processing
    $total = $_SESSION['total'];
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="./style.css" type="text/css">
</head>

<body>
    <h3>Checkout</h3>
    <p> The amount to charge: $<?= $total ?> </p>
    <?php
        if(authenticated($_POST["user"], $_POST["pass"])){
    ?>
    <form method="post" action="confirmation.php">
        Name on Card: <input type="text" name="NOC" required> <br>
        Card Number: <input type="password" name="CN" min="0" required> <br>
        Expiration Date: <input type="text" name="ED" value="mm/yy" maxlength="5" required> <br>
        Security Code: <input type="password" name="SC" maxlength = "3" required> <br>
        <input type="submit">
    <?php
        } else {
    ?>
    <p>Not Authenticated</p>
    <?php
        }
    ?>
</form>
</body>
</html>

<?php
require("header.php");

$transaction = PagarMe_Transaction::findById($_GET["id"]);
echo "<pre>";
print_r($transaction->capture(3100));
echo "</pre>";

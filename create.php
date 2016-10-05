<?php
require("header.php");

$amount = str_replace(array(".", ","), "", $_POST["amount"]);

$data = array(
								"amount" 					=> $amount,
								"payment_method" 	=> $_POST["payment_method"],
								"customer" 				=> $_POST["customer"],
								"installments" 		=> $_POST["installments"]);

if ($data["payment_method"] == "credit_card") {
				$data += $_POST["card"];
}


try { 
				$transaction = new PagarMe_Transaction($data);
				$transaction->charge();
} catch(Exception $e) {
				echo $e->getMessage();
}

if ($transaction->payment_method == "boleto") {
				echo "Link para o boleto<br>";
				echo "<a target='_blank' href=".$transaction->boleto_url.">".$transaction->boleto_url."</a>";
}
?>

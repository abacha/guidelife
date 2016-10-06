<html>
        <head>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        </head>
        <body>
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
                        require("success.php");
                } catch(Exception $e) {
                        echo $e->getMessage();
                }

                ?>
        </body>
</html>

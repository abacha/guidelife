<div class="container" style="padding-bottom:100px">
        <div class="page-header">
                <h1>Guide Life</h1>
        </div>
        <div class="alert alert-success" role="alert">
                <b>Transação efetuada com sucesso!</b>
        </div>
        <? if ($transaction->payment_method == "boleto") { ?>
                <p>
                        Link para o boleto:
                        <a target="_blank" href=""></a>
                        <iframe src="https://api.pagar.me/1/boletos/live_citxbiz9d0kg9gu3e33cwmdwr" width="100%" height="100%" />
                </p>
        <? } ?>
</div>

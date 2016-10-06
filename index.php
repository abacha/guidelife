<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha256-U0YLVHo5+B3q9VEC4BJqRngDIRFCjrhAIZooLdqVOcs=" crossorigin="anonymous"></script>

				<script type="text/javascript">
								$(function() {
									$(".currency").maskMoney({"thousands": ".", "decimal": ","});
									$("#payment_method").change(function() {
													if ($(this).val() == "boleto") {
																	$("#credit_card").addClass("hidden");
													}
													else {
																	$("#credit_card").removeClass("hidden");
													}
													});
										$("#payment_method").change();
									});
				</script>
</head>
<body>
<div class="container" style="padding-bottom:100px">
				<div class="page-header">
								<h1>Guide Life</h1>
				</div>
				<form action="create.php" class="form-horizontal" method="post">
								<div class="col-sm-8 col-sm-offset-2">
												<div class="panel panel-primary">
																<div class="panel-heading"><b>Financeiro</b></div>
																<div class="panel-body">
																				<div class="form-group">
																								<label class="form-label col-sm-3">Valor</label>
																								<div class="col-sm-8">
																												<input class="form-control currency" type="text" required="true" name="amount">
                                                </div>
                                        </div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Forma de Pagamento</label>
																								<div class="col-sm-8">
																												<select id="payment_method" class="form-control" required="true" name="payment_method">
																																<option value="boleto">Boleto</option>
																																<option value="credit_card">Cartão de Crédito</option>
																												</select>
                                                </div>
                                        </div>
																</div>
												</div>
												<div class="panel panel-primary hidden" id="credit_card">
																<div class="panel-heading"><b>Cartão de Crédito</b></div>
																<div class="panel-body">
																				<div class="form-group">
																								<label class="form-label col-sm-3">Parcelamento</label>
																								<div class="col-sm-8">
																												<select class="form-control" name="installments">
																																<option value="1">1x</option>
																																<option value="2">2x</option>
																																<option value="3">3x</option>
																												</select>
																								</div>
																				</div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Portador do Cartão</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" name="card[card_holder_name]">
																								</div>
																				</div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Número do Cartão</label>
																								<div class="col-sm-7">
																												<input class="form-control" type="text" name="card[card_number]" maxlength="16">
																								</div>
                                        </div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Código de Segurança</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" name="card[card_cvv]">
																								</div>
                                        </div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Validade do Cartão</label>
																								<div class="col-sm-4">
																												<input placeholder="MM" class="form-control" type="text" name="card[card_expiration_month]" maxlength="2">
																								</div>
																								<div class="col-sm-4">
																												<input placeholder="AAAA" class="form-control" type="text" name="card[card_expiration_year]" maxlength="4">
																								</div>
																				</div>
																</div>
												</div>
												<div class="panel panel-primary">
																<div class="panel-heading"><b>Dados Pessoais</b></div>
																<div class="panel-body">
																				<div class="form-group">
																								<label class="form-label col-sm-3">Nome</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[name]">
                                                </div>
                                        </div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">CPF</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[document_number]">
																								</div>
																				</div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Email</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[email]">
																								</div>
																				</div>
																</div>
												</div>
												<div class="panel panel-primary">
																<div class="panel-heading"><b>Endereço</b></div>
																<div class="panel-body">
																				<div class="form-group">
																								<label class="form-label col-sm-3">CEP</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[address][zipcode]">
																								</div>
																				</div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Logradouro</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[address][street]">
																								</div>
																				</div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Número</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[address][street_number]">
																								</div>
                                        </div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Complemento</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" name="customer[address][complementary]">
																								</div>
                                        </div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Bairro</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[address][neighborhood]">
																								</div>
																				</div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Cidade</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[address][city]">
																								</div>
																				</div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Estado</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[address][state]">
																								</div>
																				</div>
																</div>
												</div>
												<div class="panel panel-primary">
																<div class="panel-heading"><b>Telefone</b></div>
																<div class="panel-body">
																				<div class="form-group">
																								<label class="form-label col-sm-3">DDD</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[phone][ddd]" maxlength="2">
																								</div>
																				</div>
																				<div class="form-group">
																								<label class="form-label col-sm-3">Número</label>
																								<div class="col-sm-8">
																												<input class="form-control" type="text" required="true" name="customer[phone][number]" maxlength="9">
																								</div>
																				</div>
																</div>
												</div>
												<button type="submit" class="btn btn-default pull-right">Enviar</button>
								</div>
				</form>
</div>
</body>
</html>

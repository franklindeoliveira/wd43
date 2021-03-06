<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Faxhion</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap-flatly.css">
	<script src="js/converteMoeda.js"></script>
	<script src="js/testaConversao.js"></script>

    <style>
        .form-control:invalid {
            border: 1px solid #cc0000;
        }
        .navbar {
            margin: 0;
        }
        .navbar .glyphicon {
            color: yellow;
        }
        body {
            padding-top: 80px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="Mirror Fashion"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="glyphicon glyphicon-align-justify"></span>
            </button>
        </div>
        <ul class="nav navbar-nav collapse navbar-collapse">
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="#">Perguntas frequentes</a></li>
            <li><a href="#">Entre em contato</a></li>
        </ul>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <h1>Ótima compra!</h1>
            <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h2 class="panel-title">Sua compra</h2>
                        </div>
                        <div class="panel-body">
                            <img src="img/produtos/foto2-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail img-responsive" >
                            <dl>
                                <dt>Cor</dt>
                                <dd><?= $_POST['cor'] ?></dd>

                                <dt>Tamanho</dt>
                                <dd><?= $_POST['tamanho'] ?></dd>

                                <dt>Produto</dt>
                                <dd><?= $_POST['nome'] ?></dd>

                                <dt>Preço</dt>
                                <dd id="preco"><?= $_POST['preco'] ?></dd>
                            </dl>

							<div class="form-group">
								<label for="qt">Quantidade</label>
								<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
							</div>
							<div class="form-group">
								<label for="total">Total</label>
								<output for="qt valor" id="total" class="form-control">
									<? $_PORT["preco"] ?>
								</output>
							</div>
                        </div>
                    </div>
                </div>
                <form class="col-sm-8 col-lg-9">
                    <div class="row">
                        <fieldset class="col-md-6">
                            <legend>Dados pessoais</legend>

                            <div class="form-group">
                                <label for="nome">Nome completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="sim" name="spam" checked>
                                    Quero receber spam da Mirror Fashion
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="col-md-6">
                            <legend>Cartão de crédito</legend>

                            <div class="form-group">
                               <label for="numero-cartao">Número - CVV</label>
                               <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                    <option value="master">MasterCard</option>
                                    <option value="visa">Visa</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                            </div>
                        </fieldset>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg pull-right">
                       <span class="glyphicon glyphicon-thumbs-up"></span>
                       Confirmar pedido
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('input[type=email]').oninvalid = function() {
            // remove mensagens de erro antigas
            this.setCustomValidity("");
            
            // reexecuta a validação
            if (!this.validity.valid) {
                // se inválido, coloca mensagem de erro
                this.setCustomValidity("Esta é uma mensagem personalizada de email inválido");
            }
        }    
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/total.js"></script>
</body>
</html>

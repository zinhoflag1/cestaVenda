<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="js/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet" >
    <!--<link href="css/style.css" rel="stylesheet">-->

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group row">
			  <div class="col-xs-2">
			    <label for="txtCodigo">Codigo</label>
			    <input class="form-control" id="txtCodigo" name="txtCodigo" type="text">
			  </div>
			  <div class="col-xs-8">
			    <label for="ex2">Descrição</label>
			    <input class="form-control" id="ex2" type="text">
			  </div>
			  <div class="col-xs-2">
			    <label for="ex3">Qtd</label>
			    <input class="form-control" id="ex3" type="text">
			  </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">	
			<br>
				<table id="details-table" class="table">
					<tr>
					    <th class="col-md-1">Código</th>
					    <th class="col-md-6">Descrição</th>
					    <th class="col-md-2">Valor Unit.</th>
					    <th class="col-md-1">Qtd</th>
					    <th class="col-md-2">Total</th>
					    <th></th>
					</tr>
					<tr>
						<td>1</td>	
						<td>Menoria DDR3</td>
						<td>R$ 80,00</td>
						<td>1</td>
						<td>R$ 160,00</td>
						<td><button type="button" onclick="remove(this)" title="Excluir Lançamento"><img src=""></button></td>
					</tr>
					<tr>
					    <th class="text-right" colspan="5">Total :</th>
					    <th>R$160,00</th>
					</tr>
				</table>
		</div>


	</div>
</div>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/carrinho.js"></script>
    
  </body>
  <script>
  	

  </script>
</html>

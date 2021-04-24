<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Nicholas Goes">
	<meta name="description" content="Página OnePage - Com os Calculos de peso e IMC">
    <meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cadastrar Pessoa</title>
</head>
<body>
    <header class="jumbotron">
        <h1 class="text-center">Cadastrar Pessoa</h1>
    </header>
    <section class="container">
        <form action="../controller/pessoa.controller.php" method="get">
          <div>
            <label for="">Nome: </label>
            <input type="text" name="txtnome">
          </div>
          <div>
            <label for="">altura: </label>
            <input type="text" placeholder="Metros" name="txtaltura" maxlength="4">
          </div>
            <div>
            <label for="">peso: </label>
            <input type="text" placeholder="Quilos" name="txtpeso" maxlength="4">
          </div>

          <input type="submit" name="cadastra" value="Verificar Total">
        </form>
</body>
</html>
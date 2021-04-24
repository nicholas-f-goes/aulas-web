<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Nicholas Goes">
	<meta name="description" content="Página OnePage - Calculadora">
    <meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body>
    <header class="jumbotron">
        <h1 class="text-center">Calculadora</h1>
    </header>
    <section class="container">
        <form action="../controller/folhadepagamento.controller.php" method="get">
          <div class="form-group">
            <label for="">Numero1: </label>
            <input type="text" name="txt1" placeholder="Digite o Numero 1" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="">Numero2: </label>
            <input type="text" name="txt2" placeholder="Digite o Numero 2" class="form-control" required>
          </div>

          <input type="submit" name="cadastra" value="Cadastrar" class="btn btn-info">
        </form>
</body>
</html>
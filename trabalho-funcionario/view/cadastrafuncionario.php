<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Nicholas Goes">
		<meta name="description" content="Página OnePage - Com os Calculos de Salário">
    <meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cadastrar Funcionario</title>
</head>
<body>
    <header class="jumbotron">
        <h1 class="text-center">Cadastrar Funcionario</h1>
    </header>
    <section class="container">
        <form action="../controller/funcionario.controller.php" method="get">
          <div>
            <label for="">Nome: </label>
            <input type="text" name="txtnome">
          </div>
          <div>
            <label for="">Salario Fixo: </label>
            <input type="number" name="txtSalarioFixo">
          </div>
          <div>
            <label for="">Valor de Vendas: </label>
            <input type="number" name="txtValorVendas">


          <input type="submit" name="cadastra" value="Verificar Total">
        </form>
</body>
</html>
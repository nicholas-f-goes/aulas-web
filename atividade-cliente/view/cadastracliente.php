<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Nicholas Goes">
	<meta name="description" content="Página OnePage - Cadastro de Cliente">
    <meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <header class="jumbotron">
        <h1 class="text-center">Cadastrar Cliente</h1>
    </header>
    <section class="container">
        <form action="../controller/cliente.controller.php" method="get">
          <div>
            <label for="">Nome: </label>
            <input type="text" name="txtnome" placeholder="Digite Seu Nome">
          </div>

          <div>
            <label for="">Código: </label>
            <input type="number" name="txtCodigo" placeholder="Digite Seu Código">
          </div>

          <div>
            <label for="">Data de Nascimento: </label>
            <input type="data" name="txtData" placeholder="Digite Sua Data de Nascimento">
          </div>

          <div>
            <label for="">cpf: </label>
            <input type="number" name="txtCpf" placeholder="Digite seu Cpf">
          </div>
          
          <div>
            <label for="">rg: </label>
            <input type="number" name="txtRg" placeholder="Digite seu Rg">
          </div>

          <div>
            <label for="">Tempo De Vinculo Empregaticio: </label>
            <input type="number" name="txtTempo" placeholder="Digite seu Tempo de Vinculo Empregaticio">
          </div>    

          <input type="submit" name="cadastra" value="Cadastrar">
        </form>
</body>
</html>
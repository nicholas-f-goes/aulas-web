<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Nicholas Goes">
	<meta name="description" content="Página OnePage - Cadastro de Funcionario">
    <meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <header class="jumbotron">
        <h1 class="text-center">Cadastrar Funcionario</h1>
    </header>
    <section class="container">
        <form action="../controller/folhadepagamento.controller.php" method="get">
          <div class="form-group">
            <label for="">Nome: </label>
            <input type="text" name="txtnome" placeholder="Digite Seu Nome" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="">Cargo: </label>
            <input type="text" name="txtcargo" placeholder="Digite o Cargo" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="">Cpf: </label>
            <input type="number" name="txtcpf" placeholder="Ex.: 00000000000" \ class="form-control" \ required>
          </div>

          <div class="form-group">
            <label for="">Valor da Hora Trabalhada: </label>
            <input type="text" name="txtvalorHora" placeholder="Ex.: 0.00" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="">Quantidade de Horas: </label>
            <input type="number" name="txtquantidadeHoras" placeholder="Ex.: 0.00" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="">Dependentes: </label>
            <input type="text" name="txtdependentes" placeholder="Ex.: 0.00" class="form-control">
          </div>
          
          <div class="form-group">
            <label for="">Horas extras 50: </label>
            <input type="text" name="txthorasExtras50" placeholder="Ex.: 0.00" class="form-control">
          </div>

          <div class="form-group">
            <label for="">Horas extras 100: </label>
            <input type="text" name="txthorasExtras100" placeholder="Ex.: 0.00" class="form-control">
          </div>

          <label for="">Tipo de Insalubridade:</label>
            <select name="txtinsalubridade" class="form-control" required >
              <option value="0">Sem Insalubridade</option>
              <option value="1">Mínimo</option>
              <option value="2">Médio</option>
              <option value="3">Máximo</option>
            </select>

          <div class="form-group">
            <label for="">Valor de Transporte Mensal: </label>
            <input type="text" name="txttransporteMensal" placeholder="Digite o valor de transporte mensal" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="">Valor da Refeição diaria: </label>
            <input type="text" name="txtrefeicaoDiaria" placeholder="Digite o valor da refeição diaria" class="form-control" required>
          </div>


          <input type="submit" name="cadastra" value="Cadastrar" class="btn btn-info">
        </form>
</body>
</html>
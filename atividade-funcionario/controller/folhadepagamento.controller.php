<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Resultado</title>
		<meta name="author" content="Nicholas Goes">
		<meta name="description" content="Página OnePage - Com os Calculos">
        	<meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
        	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  	</head>
  <body>
    <main>
      <header class="jumbotron">
        <h1 class="text-center">Dados do Funcionario</h1>
      </header>
      <section class="container">
        <?php
          //1º PASSO - incluimos a classe modelo:
          include '../model/funcionario.class.php';

          //2º PASSO - Instanciamos a classe - criando um objeto:
          $f1 = new funcionario();
          //3º PASSO - Atribuimos os valores aos dados - pegar do form:
          $nome = $_GET['txtnome'];
          $f1->setNome($nome);

          $cpf = $_GET['txtcpf'];
          $f1->setCpf($cpf);

          $cargo = $_GET['txtcargo'];
          $f1->setCargo($cargo);

          $valorHora = $_GET['txtvalorHora'];
          $f1->setValorHora($valorHora);
          
          $quantidadeHoras = $_GET['txtquantidadeHoras'];
          $f1->setQuantidadeHoras($quantidadeHoras);

          $horasExtras50 = $_GET['txthorasExtras50'];
          $f1->setHorasExtras50($horasExtras50);

          $horasExtras100 = $_GET['txthorasExtras100'];
          $f1->setHorasExtras100($horasExtras100);

          $dependentes = $_GET['txtdependentes'];
          $f1->setDependentes($dependentes);

          $tipoInsalubridade = $_GET['txtinsalubridade'];
          $f1->setTipoInsalubridade($tipoInsalubridade);

          $valorTransporteMensal = $_GET['txttransporteMensal'];
          $f1->setValorTransporteMensal($valorTransporteMensal);

          $valorRefeicaoDiaria = $_GET['txtrefeicaoDiaria'];
          $f1->setValorRefeicaoDiaria($valorRefeicaoDiaria);

       
          echo "<p>Dados: ".$f1->toString().
               "<p>Salário Bruto: R$ ".$f1->calcularSalarioBruto().
               "<p>Vale Transporte: R$ ".$f1->calcularValeTransporte().
               "<p>Salário Familia: R$ ".$f1->calcularSalarioFamilia().
               "<p>Inss: R$ ".$f1->calcularInss().
               "<p>Vale Refeição: R$ ".$f1->calcularValeRefeicao().
               "<p>Horas extras 50: R$ ".$f1->calcularHoraExtra50().
               "<p>Horas extras 100: R$ ".$f1->calcularHoraExtra100(). 
               "<p>Horas extras: R$ ".$f1->calcularTotalHorasExtras().
               "<p>Salário liquido: R$ ".$f1->calcularSalarioLiquido().
               "<p>Tipo de Insalubridade: R$ ".$f1->mostrarInsalubridade().             
               "</p>";
         ?>
      </section>
    </main>
  </body>
  </html>

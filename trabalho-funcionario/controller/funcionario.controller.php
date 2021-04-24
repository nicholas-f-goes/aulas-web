<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Resultado</title>
		<meta name="author" content="Nicholas Goes">
		<meta name="description" content="Página OnePage - Com os Calculos de Salário">
    <meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
    <main>
      <header class="jumbotron">
        <h1 class="text-center">Dados do Funcionario</h1>
      </header>
      <section class="container">
        <p>
        Um funcionário recebe um salário fixo mais 4% de comissão sobre as vendas. Faça um programa que receba o salário fixo e o valor de suas vendas. Calcule e mostre a comissão e o salário final do funcionário. Use os métodos default: gets/sets e toString.
        </p>
        <?php
          //1º PASSO - incluimos a classe modelo:
          include '../model/funcionario.class.php';

          //2º PASSO - Instanciamos a classe - criando um objeto:
          $f1 = new funcionario();
          //3º PASSO - Atribuimos os valores aos dados - pegar do form:
          $nome = $_GET['txtnome'];
          $f1->setNome($nome);
          $valorVendas = $_GET['txtValorVendas'];
          $f1->setValorVendas($valorVendas);
          $salarioFixo = $_GET['txtSalarioFixo'];
          $f1->setSalarioFixo($salarioFixo);
       
          echo "<p>Dados: ".$f1->toString().
               "<br>A Comissao é:".$f1->calcularComissao().
               "<br>O Salario Final é:".$f1->calcularSalarioFinal().
               "</p>";
         ?>
      </section>
    </main>
  </body>
  </html>

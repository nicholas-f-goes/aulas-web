<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Resultado</title>
		<meta name="author" content="Nicholas Goes">
		<meta name="description" content="Página OnePage - Com os Calculos de peso">
        <meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
    <main>
      <header class="jumbotron">
        <h1 class="text-center">Dados da Pessoa</h1>
      </header>
      <section class="container">
        <p>
        Uma pessoa possui nome, peso e altura. Desenvolva um programa que diga se a pessoa está no seu peso ideal, pense que para saber isso precisamos saber antes o índice de massa corporal de uma pessoa, calcule primeiro e depois analise se esse índice der um valor Entre 18,5 e 24,9 a pessoa está no peso ideal, caso contrário, não está no peso ideal. 
        </p>
        <?php
          //1º PASSO - incluimos a classe modelo:
          include '../model/pessoa.class.php';

          //2º PASSO - Instanciamos a classe - criando um objeto:
          $p1 = new pessoa();
          //3º PASSO - Atribuimos os valores aos dados - pegar do form:
          $nome = $_GET['txtnome'];
          $p1->setNome($nome);
          $altura = $_GET['txtaltura'];
          $p1->setAltura($altura);
          $peso = $_GET['txtpeso'];
          $p1->setPeso($peso);
       
          echo "<p>Dados: ".$p1->toString().
               "<br>O Seu Imc: ".$p1->imc().
               "<br>Resultado: ".$p1->classificar().
               "</p>";
         ?>
      </section>
    </main>
  </body>
  </html>

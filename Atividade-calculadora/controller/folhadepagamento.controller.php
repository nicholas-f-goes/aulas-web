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
        <h1 class="text-center">Calculadora</h1>
      </header>
      <section class="container">
        <?php
          //1º PASSO - incluimos a classe modelo:
          include '../model/calculadora.class.php';

          //2º PASSO - Instanciamos a classe - criando um objeto:
          $c1 = new calculadora();
          //3º PASSO - Atribuimos os valores aos dados - pegar do form:
          $numero1 = $_GET['txt1'];
          $c1->setNumero1($numero1);

          $numero2 = $_GET['txt2'];
          $c1->setNumero2($numero2);
       
          echo "<p>Dados: ".$c1->toString().
               "<p>Resultado Soma: ".$c1->soma().
               "<p>Resultado divisão: ".$c1->divisao().
               "<p>Resultado multiplição: ".$c1->multiplicar().
               "<p>Resultado raiz: ".$c1->calcularRaiz().        
               "</p>";
         ?>
      </section>
    </main>
  </body>
  </html>

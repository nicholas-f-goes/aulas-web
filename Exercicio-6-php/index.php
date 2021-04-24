<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<title>Resultado</title>
		<meta name="author" content="Nicholas Goes">
		<meta name="description" content="Página OnePage - Com os Calculos">
        <meta name="keyword" content="One Page, HTML, CSS, Link, âncora, scrool">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  	</head>
</head>
<body>
    <main>
        <header class="jumbotron">
            <h1 class="text-center">Dados</h1>
        </header>
        <section class="container">
            <?php
          
                $dias;
                $meses;
                $anos;
                $semanas;

                $dias = 365;
                $meses = 12;
                $semanas = 52;
                $anos = 10;
                $conversaoDias = $dias * $qnos;
                $conversaoMeses = $meses * $anos;
                $conversaoAnos = $anos * $anos;

                echo "<h1> O Resultado em dias é: ".$conversaoDias."</h1>"
                     "<h1> O Resultado em Meses é: ".$conversaoMeses."</h1>"
                     "<h1> O Resultado em Anos é: ".$conversaoAnos."</h1>";

            ?>
        </section>
        
    </main>
</body>
</html>
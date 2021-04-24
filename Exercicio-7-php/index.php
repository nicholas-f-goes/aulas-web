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
          
                $base;
                $altura;
                $area;

                $base = 2;
                $altura = 3;
                $area = $base * $altura;

                echo "<h1> O Resultados é: ".$area."</h1>";
     

            ?>
        </section>
        
    </main>
</body>
</html>
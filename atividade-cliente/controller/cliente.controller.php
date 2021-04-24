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
        <h1 class="text-center">Dados do Cliente</h1>
      </header>
      <section class="container">
        <p>
        Desenvolva um sistema que seja capaz de cadastrar clientes para mais tarde permitir que os mesmos efetuem as compras.
        Cada cliente deve ter: código, nome, data nascimento, cpf, rg, tempo de vínculo empregatício, e-mail e uma senha de acesso (esta senha quero que seja criada automaticamente ao instanciar um cliente), a senha não deve ser digitada pelo cliente, os demais dados sim. Seu programa deve ser capaz de cadastrar cliente e liberar uma carta de crédito de acordo com seu vínculo empregatício. Cliente com menos de dois anos de vínculo não possuem carta de crédito, de dois anos até 4 anos - possuem uma carta de crédito de 5000, acima de 4 anos até 6 anos - carta de crédito de 8000, acima de 6 anos - carta de crédito de 10000.
        </p>
        <?php
          //1º PASSO - incluimos a classe modelo:
          include '../model/cliente.class.php';

          //2º PASSO - Instanciamos a classe - criando um objeto:
          $c1 = new cliente();
          //3º PASSO - Atribuimos os valores aos dados - pegar do form:
          $nome = $_GET['txtnome'];
          $c1->setNome($nome);

          $codigo = $_GET['txtCodigo'];
          $c1->setCodigo($codigo);

          $dataNascimento = $_GET['txtData'];
          $c1->setDataNascimento($dataNascimento);

          $cpf = $_GET['txtCpf'];
          $c1->setCpf($cpf);

          $rg = $_GET['txtRg'];
          $c1->setRg($rg);

          $tempoVinculoEmpregaticio = $_GET['txtTempo'];
          $c1->setTempoVinculoEmpregaticio($tempoVinculoEmpregaticio);

          $email = $_GET['txtEmail'];
          $c1->setEmail($email);

       
          echo "<p>Dados: ".$c1->toString().
               "<br>A Sua Carta de Credito é:".$c1->classificarCarta().
               "<br>Sua senha é:".$c1->gerarSenha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos).
               "</p>";
         ?>
      </section>
    </main>
  </body>
  </html>

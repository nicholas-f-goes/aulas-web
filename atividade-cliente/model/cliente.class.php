<?php
  class pessoa{
    //Atributos:
    private $nome;
    private $codigo;
    private $dataNascimento;
    private $cpf;
    private $rg;
    private $tempoVinculoEmpregaticio;
    private $email;
  
      public function getNome(){
        return $this->nome;
      }
  
      public function setNome($nome){
        $this->nome = $nome;
      }
  
      public function getCodigo(){
        return $this->codigo;
      }
  
      public function setCodigo($codigo){
        $this->codigo = $codigo;
      }
  
      public function getDataNascimento(){
        return $this->dataNascimento;
      }
  
      public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
      }

      public function getCpf(){
        return $this->cpf;
      }
  
      public function setCpf($cpf){
        $this->cpf = $cpf;
      }

      public function getRg(){
        return $this->rg;
      }
  
      public function setRg($rg){
        $this->rg = $rg;
      }

      public function getTempoVinculoEmpregaticio(){
        return $this->tempoVinculoEmpregaticio;
      }
  
      public function setTempoVinculoEmpregaticio($tempoVinculoEmpregaticio){
        $this->tempoVinculoEmpregaticio = $tempoVinculoEmpregaticio;
      }

      public function getEmail(){
        return $this->email;
      }
  
      public function setEmail($email){
        $this->email = $email;
      }
  
      public function toString(){
        return  "<br>Nome: ".$this->nome.
                "<br>Código: ".$this->codigo.
                "<br>Data de Nascimento: ".$this->dataNascimento.
                "<br>Cpf: ".$this->cpf.
                "<br>Rg: ".$this->rg.
                "<br>Tempo de Vinculo Empregaticio: ".$this->tempoVinculoEmpregaticio.
                "<br>Email: ".$this->email;                        
      }

      public function classificarCarta(){
         if($this->tempoVinculoEmpregaticio<2){
          return ("Sem Carta de Credito");
        }else if($this->tempoVinculoEmpregaticio>=2 && <=4){
          return ("Carta de Crédito de 5000");
        }else if($this->tempoVinculoEmpregaticio>=4 && <=8){
            return ("Carta de Crédito de 8000");
        }else if($this->tempoVinculoEmpregaticio>=8){
            return ("Carta de Crédito de 10000");
        }
  }

  public function gerarSenha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
        $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ";
        $mi = "abcdefghijklmnopqrstuvyxwz";
        $nu = "0123456789";
        $si = "!@#$%¨&*()_+=";
  
        if ($maiusculas){       
          $senha. = str_shuffle($ma);
        }
  
        if ($minusculas){        
          $senha. = str_shuffle($mi);
        }
  
        if ($numeros){
          $senha. = str_shuffle($nu);
        }
        if ($simbolos){
          $senha. = str_shuffle($si);
        }

      return substr(str_shuffle($senha),0,$tamanho);
  }
}

?>

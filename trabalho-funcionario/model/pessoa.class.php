<?php
  class pessoa{
    //Atributos:
    private $nome;
    private $altura;
    private $peso;

    public function getNome(){
      return $this->nome;
    }

    public function setNome($nome){
      $this->nome = $nome;
    }

    public function getAltura(){
      return $this->altura;
    }

    public function setAltura($altura){
      $this->altura = $altura;
    }

    public function getPeso(){
      return $this->peso;
    }

    public function setPeso($peso){
      $this->peso = $peso;
    }

    public function toString(){
      return "<br>Nome: ".$this->nome.
              "<br>Altura: ".$this->altura.
              "<br>Peso: ".$this->peso;
    }

    public function imc(){
        return $this->peso / ($this->altura * $this->altura);
    }

    public function classificar(){
      if($this->imc() >= 18.5 && $this->imc() <= 24.9){
        return ("Você está no peso ideal");
      }else{
          return ("Você está fora do peso ideal");
    }
}
    
  }

?>

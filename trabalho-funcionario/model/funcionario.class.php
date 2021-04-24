<?php
  class funcionario{
    //Atributos:
    private $nome;
    private $salarioFixo;
    private $valorVendas;

    public function getNome(){
      return $this->nome;
    }

    public function setNome($nome){
      $this->nome = $nome;
    }

    public function getSalarioFixo(){
      return $this->salarioFixo;
    }

    public function setSalarioFixo($salarioFixo){
      $this->salarioFixo = $salarioFixo;
    }

    public function getValorVendas(){
      return $this->valorVendas;
    }

    public function setValorVendas($valorVendas){
      $this->valorVendas = $valorVendas;
    }

    public function toString(){
      return "<br>Nome: ".$this->nome.
              "<br>Salario Fixo: ".$this->salarioFixo.
              "<br>Valor Vendas: ".$this->valorVendas;
    }

    public function calcularComissao(){
        return $this->valorVendas * 0.4;
    }

    public function calcularSalarioFinal(){
      return $this->valorVendas * 0.4 + $this->salarioFixo;
  }
    
  }

?>

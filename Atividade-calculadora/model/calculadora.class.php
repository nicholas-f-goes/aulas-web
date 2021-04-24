<?php
  class Calculadora{
      $numero1;
      $numero2;

    public function getNumero1()
    {
        return $this->numero1;
    }

    public function setNumero1($numero1)
    {
        $this->numero1 = $numero1;
    }

    public function getNumero2()
    {
        return $this->numero2;
    }

    public function setNumero2($numero2)
    {
        $this->numero2 = $numero2;
    }

    public function somar(){
        return $this->numero1 + $this->numero2;
    }

    public function multiplicar(){
        return $this->numero1 * $this->numero2;
    }

    public function dividir(){
        return $this->numero1 / $this->numero2;
    }

    public function calcularRaiz(){
        return $this->numero1 + $this->numero2;
    }


    public function toString(){
        return "<br>numero1: ".$this->numero1.
               "<br>numero2: ".$this->numero2.

    }

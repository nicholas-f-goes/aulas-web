<?php
  class funcionario{
    private $nome;
    private $cpf;
    private $cargo;
    private $valorHora;
    private $quantidadeHoras;
    private $horasExtras50;
    private $horasExtras100;
    private $dependentes;
    private $tipoInsalubridade;
    private $valorTransporteMensal;
    private $valorRefeicaoDiaria;


    public function getValorRefeicaoDiaria()
    {
        return $this->valorRefeicaoDiaria;
    }

    public function setValorRefeicaoDiaria($valorRefeicaoDiaria)
    {
        $this->valorRefeicaoDiaria = $valorRefeicaoDiaria;
    }

    public function getValorHora()
    {
        return $this->valorHora;
    }

    public function setValorHora($valorHora)
    {
        $this->valorHora = $valorHora;
    }

    public function getValorTransporteMensal()
    {
        return $this->valorTransporteMensal;
    }

    public function setValorTransporteMensal($valorTransporteMensal)
    {
        $this->valorTransporteMensal = $valorTransporteMensal;

    }

    public function getTipoInsalubridade()
    {
        return $this->tipoInsalubridade;
    }

    public function setTipoInsalubridade($tipoInsalubridade)
    {
        $this->tipoInsalubridade = $tipoInsalubridade;
    }

    public function getDependentes()
    {
        return $this->dependentes;
    }

    public function setDependentes($dependentes)
    {
        $this->dependentes = $dependentes;

    }

    public function getHorasExtras100()
    {
        return $this->horasExtras100;
    }

    public function setHorasExtras100($horasExtras100)
    {
        $this->horasExtras100 = $horasExtras100;

    }

    public function getHorasExtras50()
    {
        return $this->horasExtras50;
    }

    public function setHorasExtras50($horasExtras50)
    {
        $this->horasExtras50 = $horasExtras50;
    }

    public function getQuantidadeHoras()
    {
        return $this->quantidadeHoras;
    }

    public function setQuantidadeHoras($quantidadeHoras)
    {
        $this->quantidadeHoras = $quantidadeHoras;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function toString(){
        return "<br>Nome: ".$this->nome.
               "<br>Cpf: ".$this->cpf.
               "<br>Cargo: ".$this->cargo.
               "<br>ValorHora: ".$this->valorHora.
               "<br>QuantidadeHoras: ".$this->quantidadeHoras.
               "<br>HorasExtras50: ".$this->horasExtras50.
               "<br>horasExtras100: ".$this->horasExtras100.
               "<br>Dependentes: ".$this->dependentes.
               "<br>Tipo de Insalubridade: ".$this->tipoInsalubridade.
               "<br>Transporte Mensal: ".$this->valorTransporteMensal.
               "<br>Valor Refeição diaria: ".$this->valorRefeicaoDiaria;
    }

    public function calcularSalarioBruto()
    {
        return $this->valorHora * $this->quantidadeHoras;
    }

    public function calcularValeTransporte()
    {
        if($this->calcularSalarioBruto() * 0.06 > $this->valorTransporteMensal){
            return 0;
        }else{
            return $this->calcularSalarioBruto() * 0.06;
        }
    }

    public function calcularSalarioFamilia()
    {
        if($this->calcularSalarioBruto()<=1425.56){
            return $this->dependentes * 48.62;
        }else{
            return 0;
        }
    }

    public function calcularInss()
    {
        if($this->calcularSalarioBruto()<=1751.81){
            return $this->calcularSalarioBruto() * 0.08;

        }else if($this->calcularSalarioBruto()>=1751.81 && $this->calcularSalarioBruto()<= 2919.72){
            return $this->calcularSalarioBruto() * 0.09;

        }else if($this->calcularSalarioBruto()>=2919.72 && $this->calcularSalarioBruto()<= 5839.45){
            return $this->calcularSalarioBruto() * 0.11;

        }else if($this->calcularSalarioBruto()>=5839.45){
            return $this->calcularSalarioBruto() * 0.27;
        }else{
            return 'Erro, tente novamente!';
        }
    }

    public function calcularValeRefeicao()
    {
        return ($this->valorRefeicaoDiaria * 25) * 0.20;
    }

    public function calcularHoraExtra50()
    {
        return $this->valorHora * $this->horasExtras50 * 1.15;
    }

    public function calcularHoraExtra100()
    {
        return $this->valorHora * $this->horasExtras100 * 2;
    }

    public function calcularTotalHorasExtras()
    {
        return $this->horasExtras100 + $this->horasExtras50 ;
    }

    public function calcularSalarioLiquido()
    {
        return $this->calcularSalarioBruto() - $this->calcularValeRefeicao() - $this->calcularValeTransporte() - $this->calcularInss();
    }
    
    public function mostrarInsalubridade()
    {
    switch($this->tipoInsalubridade){
        case 0:
            echo "<br>Sem Insalubridade";
        break;
        case 1:
            return $this->calcularSalarioBruto() * 0.4 ;
        break;
        case 2:
            return $this->calcularSalarioBruto() * 0.2 ;
        break;
        case 3:
            return $this->calcularSalarioBruto() * 0.4 ;
        break;
        default:
            echo "Tente Novamente";
        break;
    }
    }
    
}

?>

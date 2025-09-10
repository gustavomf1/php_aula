<?php
class Carro {
    public string $marca = "";
    public string $modelo = "";

    public function __construct(string $marca, string $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibir() {
        return "Carro: {$this->marca} - {$this->modelo}";
    }
}

$carro = new Carro("Volkswagen", "Gol GTI");
//echo $carro->exibir();

class ContaBancaria{
    private $saldo = 0;
    
    public function sacar(float $valor){
         $this->saldo -= $valor;
    }

    public function deposito(float $valor){
        $this->saldo += $valor;
    }

    public function getSaldo(){
        return $this->saldo;
    }
}

$conta = new ContaBancaria();
$conta->deposito(50);
$conta->sacar(100);

//echo "Saldo atual: {$conta->getSaldo()}";

class Animal{
    public function comunicar(){
        return "Som animal";
    }

    public function pelo(){
        return "Tenho Pelos!";
    }
}

class Cachorro extends Animal{
    public function comunicar(){
        return "Au Au Au";
    }
}

class Gato extends Animal{
    public function comunicar(){
        return "Miar";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();

echo $cachorro->comunicar() . "<br/>";
echo $gato->comunicar() . "<br/>";
echo $cachorro->pelo() . "<br/>";
?>

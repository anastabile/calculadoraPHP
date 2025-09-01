<?php
class carro
{
//objetos dentro da programação são representações computacionais de elementos do mundo real
public $motor;
public $torque;
public $peso;
public $espaco;
}
class utilitario extends carro
{
public $modoTurbo;

}
class SUV extends utilitario
{
public $asstentos;
}

$onix= new carro(motor:1.0, torque:0.7, peso:950.9, espaco:560);
$onix->motor= 1.7;
$hilux= new utilitario(motor:2.3, torque:0.9, peso:1180, espaco:1025);
$hilux-> modoTurbo=2.7;
$sw4= new SUV(motor:3.4, torque:2, peso:1098, espaco:2000);
$sw4-> assentos=7;
var_dump($onix);

echo "<br>";
echo "<br>";
var_dump($hilux);
echo "<br>";
echo "<br>";
var_dump($sw4);

class carro 
{
public $motor;
public$torque;
public$peso;
public$espaco;

    public function __construct($motor, $torque, $peso, $espaco){
        $this->motor= $motor;
        $this->torque= $torque;
        $this-> peso= $peso;
        $this-> espaco= $espaco;            
    }

}
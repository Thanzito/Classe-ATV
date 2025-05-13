<?php

require_once "src/Classes/Cliente.php";
require_once "src/Classes/Carro.php";
require_once "src/Classes/Vendedor.php";

//Clientes
$cli = new Cliente;
$cli ->nome = "Nathan";
$cli ->idade = 17;
$cli ->endereco = "Rua A, 123";
$cli ->telefone = "(41)-9-9881-3590";
$cli ->comprar();
echo "<br>";

$cli2 = new Cliente;
$cli2 ->nome = "Gustavo";
$cli2 ->idade = 17;
$cli2 ->endereco = "Rua B, 456";
$cli2 ->telefone = "(41)-9-9768-3675";
$cli2 ->comprar();

//Carro
$car = new Carro;
$car ->modelo = "Fiat";
$car ->cor = "Vermelho";
echo "<br>";

$car2 = new Carro;
$car2 ->modelo = "Fusca";
$car2 ->cor = "Preto";
echo "<br>";

//Vendedor
$vend = new Vendedor;
$vend ->nomeVendedor = "Joshua";
$vend ->enderecoVendedor = "Rua jiboia, 6969";
echo "<br>";

$vend2 = new Vendedor;
$vend2 ->nomeVendedor = "Robson";
$vend2 ->enderecoVendedor = "Rua mosquito, 3050";
echo "<br>";

//var dump
var_dump($cli);
echo "<br><br>";

var_dump($cli2);
echo "<br><br>";

var_dump($car);
echo "<br><br>";

var_dump($car2);
echo "<br><br>";

var_dump($vend);
echo "<br><br>";

var_dump($vend2);
echo "<br>";

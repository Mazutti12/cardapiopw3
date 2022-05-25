<?php
//to tendo problema pra fazer isso n sei por que
//a classe não ta pegando o id pra atualizar
require "lib/classCardapio.php";

$id = $_GET['id'];

$ingred = new Ingredientes;
$ingred->setId($id);
$ingred->setNome('nome');
$ingred->setCalorias('100');

$ingred->alterar();
//print_r($ingred);

?>

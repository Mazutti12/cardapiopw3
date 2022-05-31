<?php
//to tendo problema pra fazer isso n sei por que
//a classe não ta pegando o id pra atualizar
require "lib/classCardapio.php";

$id = $_GET['id'];

$ingred = new Ingredientes;
$ingred->setId($id);
$ingred->setNome($_POST['nome']);
$ingred->setCalorias($_POST['calorias']);

$ingred->alterar();
//print_r($ingred);

?>

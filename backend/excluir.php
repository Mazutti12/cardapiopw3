<?php

require "lib/classCardapio.php";

$id = $_GET['id'];

$ingred = new Ingredientes;
$ingred->setId($id);
$ingred->excluir();




?>
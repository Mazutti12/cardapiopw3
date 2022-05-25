<?php
require "lib/classCardapio.php";

try {
    $ingred = new Ingredientes();
    $ingred->setNome($_POST['nome']);
    $ingred->setCalorias($_POST['calorias']);
    $ingred->inserir();
    
}catch(Exception $e){
    print json_encode([
        "error" => true,
        "message" => $e->getMessage()
    ]);
}

?>
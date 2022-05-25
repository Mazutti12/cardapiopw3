<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=cardapio",'root', '');
    $ingredientes = [];
    foreach ($db->query("SELECT * FROM ingredientes") as $ingred){
        $ingredientes[] = [
            "id" => $ingred['id_ingredientes'],
            "nome" => $ingred['nome'],
            "calorias" => $ingred['calorias']
            
        ];
    }
    
    print json_encode($ingredientes);
    
} catch(PDOException $e){
    die($e->getMessage());
}
?>
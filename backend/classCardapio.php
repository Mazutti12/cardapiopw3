<?php

class Cardapio 
{
    private $id;
    private $data;
    private $tipo;
   
}


class Refeicao 
{
    private $id;
    private $descricao;
    

    function SomaCalorias()
    {
        $ingrediente = new Ingrediente();
        foreach ($ingrediente as $calorias)
        {
            $caloriasFinais += $calorias->$this->caloriasIngredientes;
        }
    }

    


}

class Ingredientes 
{
    private $ingrediente = [];
    private $caloriasIngrediente;
    
   

    function setIngrediente($ingrediente,$calorias)
    {
        $this->ingrediente =  ['nome' => $ingrediente,'calorias' => $calorias];
    }

    

}


$

//ta dando um erro n sei oq é ta dando como variavel indefinida
$ingrediente = new Ingredientes();
$ingrediente->setIngrediente('massa','450kcal');


var_dump($ingrediente);



?>
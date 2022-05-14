<?php

class Cardapio 
{
    private $id;
    private $data;
    private $tipo;
   
}


class Refeicao extends Ingredientes
{
    private $idRefeicao;
    private $descricao;
    

    

    


}

class Ingredientes 
{
    private $id;
    private $nome;
    private $calorias;  

    function setNome($n)
    {
        $this->nome = $n;
    }
    function setCalorias($c)
    {   
        $this->calorias = $c;
    }
    function getNome()
    {
        return $this->name;
    }
    function getCalorias()
    {
        return $this->calorias;
    }
    function getId()
    {
        return $this->id;
    }

    function inserir()
    {
        try 
        {
            $db = new PDO("mysql:host=localhost;dbname=cardapio", "root", "");
            $consulta = $db->prepare("INSERT INTO ingredientes(nome,calorias) VALUES(:nome,:calorias)");
            $consulta-> execute([':nome' =>$this->nome, ':calorias' => $this->calorias]);

            $consulta = $db->prepare("SELECT id_ingredientes FROM ingredientes ORDER BY id_ingredientes DESC LIMIT 1");
            $consulta->execute(); 
            $data = $consulta->fetch(PDO::FETCH_ASSOC);
            $this->id = $data['id_ingredientes'];
        } 
        catch(PDOException $e)
        {
            throw new Exception("Ocorreu um erro interno!");
        }
    }
    function alterar()
    {
        try
        {
            $db = new PDO("mysql:host=localhost;dbname=cardapio", "root", "");
            $consulta = $db->prepare("UPDATE ingredientes SET nome = :nome, calorias = :calorias WHERE id_ingredientes = :id");
            $consulta->execute([
            ':id' => $this->id,
            ':nome' => $this->nome, 
            ':calorias' => $this->calorias
            ]);  
        }
        catch(PDOException $e)
        {
            die($e);
        }
    }
    function excluir()
    {
        try
        {
            $db = new PDO("mysql:host=localhost;dbname=cardapio;","root","");
            $consulta = $db->prepare("DELETE FROM ingredientes WHERE id_ingredientes = :id");
            $consulta->execute([':id'=> $this->id]);
        }
        catch(PDOException $e)
        {
            die($e);
        }
    }

    // ta funcionando soma todas as calorias da tabela so tem que fazer um comando sql pra puxar so o que nos queremos
    function somaCalorias()
    {
        $soma = 0;
        try
        {
            $db = new PDO("mysql:host=localhost;dbname=cardapio", "root", "");
            foreach ($db->query("SELECT * FROM ingredientes") as $ingred)
            {
                $soma += $ingred['calorias'];      
                
            }
            return $soma;  
        } 
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
}



// tudas fincionalidades testadas a baixo
                                 
//$ing = new Ingredientes();
/*$ing->setNome('massa');
$ing->setCalorias(200);
$ing->inserir();
$ing->setNome('feija');
$ing->setCalorias(250);
$ing->alterar();
$ing->excluir();
$a = $ing->getid();
echo $a;
echo "<pre>";
print_r($ing);


$calorias = $ing->somaCalorias();
echo $calorias;
*/
$a = new Refeicao();
$soma = $a->somaCalorias();
echo $soma;






?>
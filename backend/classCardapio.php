<?php

class Cardapio 
{
    private $id;
    private $data;
    private $tipo;
   
}


class Refeicao 
{
    private $idRefeicao;
    private $descricao;
    

    function SomaCalorias($idRefeicas)
    {
        //busca no banco de dados todas os incres da refeição em especifico e soma
    }

    


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
}


/*

                                    todas as funcionalidades de incluir alterar e excluir funcionando
$ing = new Ingredientes();
$ing->setNome('massa');
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
*/










?>
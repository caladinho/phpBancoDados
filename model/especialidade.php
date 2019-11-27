<?php

class Especialidade{
    private $idEspecialidade;
    private $especialidade;
    private $valorDia;

    public function getId(){
        return $this->idEspecialidade;
    }
    public function setId($id){
        $this->idEspecialidade = $id;
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function getValor_dia(){
        return $this->valorDia;
    }
    public function setValor_dia($valorDia){
        $this->valorDia = $valorDia;
    }


function add(){
    try{
        $sql = "insert into especialidade (especialidade, valor_dia) values (:especialidade, :valor_dia)";
        require_once("dao.php");
        $dao = new Dao;
        $stman = $dao->conecta()->prepare($sql);
        $stman->bindParam(":especialidade", getEspecialidade());
        $stman->bindParam(":valor_dia", getValor_dia());
        $stman->execute();
        aviso("Salvo com sucesso!");
    }catch(Exception $e){
        erro("Erro!" . $e->getMessage());
    }
}

function listAll(){
    $result = null;
    try{
        $sql = "select * from especialidade";
        require_once("dao.php");
        $dao = new Dao;
        $stman = $dao->conecta()->prepare($sql);
        $stman->execute();
        $result = $stman->fetchAll(PDO::FETCH_OBJ);    
    }catch(Exception $e){
        erro("Erro!" . $e->getMessage());
    }
    return $result;
}
}

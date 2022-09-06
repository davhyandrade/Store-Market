<?php

include_once 'conectar.php';

class produto
{
    private $id;
    private $nome;
    private $estoque;
    private $conn;

    public function getId() {
        return $this ->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome ($name) {
        $this->nome= $name;
    }

    public function getEstoque () {
        return $this->estoque;
    }

    public function setEstoque ($estoqui) {
        $this->estoque= $estoqui;
    }

    function listar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->query("select * from produtos order by nome");
            $sql->execute();
            return $sql->fetchALL();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }

    function salvar() {
        try {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into produtos values (null, ?, ?)");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            if($sql->execute() == 1) {
                return 'Registro salvo com sucesso!!';
            }
            $this->conn = null;
        }   
        catch(PDOException $exc) {
            echo 'Erro ao salvar o registro - ' . $exc->getMessage();
        }
    }
} 
<?php

class UsuarioRepository {
    private $conexao;

    public function __construct(mysqli $conexao){
        $this->conexao = $conexao;
    }

    public function buscarTodos(){
        $result = $this->conexao->query("SELECT * FROM usuarios");

        $usuarios = [];

        while($row = $result->fetch_assoc()) {
            array_push($usuarios, $row);
        }
        
        return $usuarios;
    }

    public function buscarPorId($id){
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    
    public function Inserir($login,$senha,$ativo){
        $sql = "INSERT INTO USUARIOS (LOGIN, SENHA, ATIVO) VALUES (?,?,?)";

        $res = $this->conexao->prepare($sql);
        $res->bind_param("ssi",$login,$senha,$ativo);
        $res->execute();
    }
    
    public function deletar($id){
        $sql = "DELETE FROM USUARIOS WHERE ID = ?";

        $res = $this->conexao->prepare($sql);
        $res->bind_param("i",$id);
        $res->execute();
    }

    public function editar($login,$ativo,$id){
        $sql = "UPDATE USUARIOS SET LOGIN=?, ATIVO=? WHERE ID = ?";

        $res = $this->conexao->prepare($sql);
        $res->bind_param("sii",$login,$ativo,$id);
        $res->execute();
    }
}

?>
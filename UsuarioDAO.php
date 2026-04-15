<?php


include_once __DIR__ . '/Conexao.php';
include_once __DIR__ . '/ConexaoConfig.php';
require_once 'Usuario.php';



class UsuarioDAO
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function inserir(Usuario $usuario)
    {
        $pstmt = $this->conexao->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
        $pstmt->bindValue(":nome", $usuario->getNome());
        $pstmt->bindValue(":email", $usuario->getEmail());
        $pstmt->bindValue(":senha", $usuario->getSenha());
        $pstmt->execute();
    }

    public function listar()
    {
        $pstmt = $this->conexao->prepare("SELECT * FROM Usuario");
        $pstmt->execute();
        $lista = $pstmt->fetchAll(PDO::FETCH_CLASS, Usuario::class);
        return $lista;
    }


    public function alterar(Usuario $usuario)
    {

        $sql = "UPDATE usuario 
            SET nome = :nome, email = :email, senha = :senha
            WHERE id = :id";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(':nome', $usuario->getNome());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':senha', $usuario->getSenha());
        $stmt->bindValue(':id', $usuario->getId());

        return $stmt->execute();
    }


    public function buscarPorNome($nome)
    {
        $sql = "SELECT * FROM usuario WHERE nome = :nome LIMIT 1";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            return new Usuario($linha); 

        }

        return null;
    }



}














?>
    <?php
    include_once __DIR__ . '/Conexao.php';
    include_once __DIR__ . '/ConexaoConfig.php';

    class CervejaDAO{

    private $conexao;
        
        public function __construct(){
            $this->conexao = Conexao::getConexao();
        }

    public function inserir(Cerveja $cerveja){        
            $pstmt = $this->conexao->prepare("INSERT INTO cerveja (nome, tipo_Estilo, teor_Alcoolico, ibu, pais_Origem, data , local, avaliacao,sugestao, comentario, rotulo) VALUES (:nome, :tipo_Estilo, :teor_Alcoolico, :ibu, :pais_Origem,:data, :local, :avaliacao,:sugestao, :comentario, :rotulo)");
            $pstmt->bindValue(":nome", $cerveja->getNome());
            $pstmt->bindValue(":tipo_Estilo", $cerveja->getTipoEstilo());
            $pstmt->bindValue(":teor_Alcoolico", $cerveja->getTeorAlcoolico());
            $pstmt->bindValue(":ibu", $cerveja->getIbu());
            $pstmt->bindValue(":pais_Origem", $cerveja->getPaisOrigem());
            $pstmt->bindValue(":data", $cerveja->getData());
            $pstmt->bindValue(":local", $cerveja->getLocal());
            $pstmt->bindValue(":avaliacao", $cerveja->getAvaliacao());
            $pstmt->bindValue(":sugestao",$cerveja->getSugestao());
            $pstmt->bindValue(":comentario", $cerveja->getComentario());
            $pstmt->bindValue(":rotulo", $cerveja->getRotulo());
            $pstmt->execute();
        }

        public function listar(){
            $pstmt = $this->conexao->prepare("SELECT * FROM Cerveja");
            $pstmt->execute();
            $lista = $pstmt->fetchAll(PDO::FETCH_CLASS, Cerveja::class);
            return $lista;
        }





    }



















    ?>
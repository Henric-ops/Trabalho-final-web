<?php

class Cerveja
{


    private $id;
    private $nome;
    private $tipoEstilo;
    private $teorAlcoolico;
    private $ibu;
    private $paisOrigem;
    private $fabricante;
    private $dataDegustacao;
    private $localDegustacao;
    private $avaliacao;
    private $comentarios;
    private $fotoRotulo;
    private $sugestao;


    public function __construct($id, $nome, $tipoEstilo, $teorAlcoolico, $ibu, $paisOrigem, $fabricante, $dataDegustacao, $localDegustacao, $avaliacao, $comentarios, $fotoRotulo, $sugestao)
    {
        $this->nome = $nome;
        $this->tipoEstilo = $tipoEstilo;
        $this->teorAlcoolico = $teorAlcoolico;
        $this->ibu = $ibu;
        $this->paisOrigem = $paisOrigem;
        $this->fabricante = $fabricante;
        $this->dataDegustacao = $dataDegustacao;
        $this->localDegustacao = $localDegustacao;
        $this->avaliacao = $avaliacao;
        $this->comentarios = $comentarios;
        $this->fotoRotulo = $fotoRotulo;
        $this->sugestao = $sugestao;
    }
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTipoEstilo()
    {
        return $this->tipoEstilo;
    }


    public function setTipoEstilo($tipoEstilo)
    {
        $this->tipoEstilo = $tipoEstilo;

        return $this;
    }


    public function getTeorAlcoolico()
    {
        return $this->teorAlcoolico;
    }


    public function setTeorAlcoolico($teorAlcoolico)
    {
        $this->teorAlcoolico = $teorAlcoolico;

        return $this;
    }

    public function getIbu()
    {
        return $this->ibu;
    }

    public function setIbu($ibu)
    {
        $this->ibu = $ibu;

        return $this;
    }


    public function getPaisOrigem()
    {
        return $this->paisOrigem;
    }


    public function setPaisOrigem($paisOrigem)
    {
        $this->paisOrigem = $paisOrigem;

        return $this;
    }


    public function getFabricante()
    {
        return $this->fabricante;
    }


    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
    }


    public function getDataDegustacao()
    {
        return $this->dataDegustacao;
    }


    public function setDataDegustacao($dataDegustacao)
    {
        $this->dataDegustacao = $dataDegustacao;

        return $this;
    }

    public function getLocalDegustacao()
    {
        return $this->localDegustacao;
    }

    public function setLocalDegustacao($localDegustacao)
    {
        $this->localDegustacao = $localDegustacao;

        return $this;
    }


    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;

        return $this;
    }

    public function getComentarios()
    {
        return $this->comentarios;
    }

    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    public function getFotoRotulo()
    {
        return $this->fotoRotulo;
    }



    public function setFotoRotulo($fotoRotulo)
    {
        $this->fotoRotulo = $fotoRotulo;

        return $this;
    }


    public function getSugestao()
    {
        return $this->sugestao;
    }


    public function setSugestao($sugestao)
    {
        $this->sugestao = $sugestao;

        return $this;
    }
}
























?>
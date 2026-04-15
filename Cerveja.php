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
    private $data;
    private $local;
    private $avaliacao;
    private $comentario;

    private $sugestao;
    private $rotulo;

    public function __construct()
    {
        if (func_num_args() != 0) {
            $atributos = func_get_args()[0];
            foreach ($atributos as $atributo => $valor) {
                if (isset($valor) && property_exists(get_class($this), $atributo)) {
                    $this->$atributo = $valor;
                }
            }
        }
    }

    public function atualizar($atributos)
    {
        foreach ($atributos as $atributo => $valor) {
            if (isset($valor) && property_exists(get_class($this), $atributo)) {
                $this->$atributo = $valor;
            }
        }
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

    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getLocal()
    {
        return $this->local;
    }
    public function setLocal($local)
    {
        $this->local = $local;
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

    public function getComentario()
    {
        return $this->comentario;
    }
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
        return $this;
    }

    public function getRotulo()
    {
        return $this->rotulo;
    }
    public function setRotulo($rotulo)
    {
        $this->rotulo = $rotulo;
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

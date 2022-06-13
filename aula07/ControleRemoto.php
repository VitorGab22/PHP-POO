

    <?php

    class Lutador
    {
        //Atributos
        private $nome;
        private $nacionalidades;
        private $idade, $altura, $peso;
        private $categoria, $vitorias, $derrotas, $empates;
        //Metodos
        function apresentar()
        {
        }
        function status()
        {
        }
        function ganharLutar()
        {
        }
        function perderLuta()
        {
        }
        function empatarLuta()
        {
        }
        //Metodos Especiais
        function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
        {
            $this->nome = $no;
            $this->nacionalidades = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->peso = $pe;
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }

        function getNome()
        {
            return $this->nome;
        }

        function getNacionalidade()
        {
            return $this->nacionalidades;
        }

        function getIdade()
        {
            return $this->idade;
        }
        function getAltura()
        {
            return $this->altura;
        }
        function getPeso()
        {
            return $this->peso;
        }
        function getCategoria()
        {
            return $this->categoria;
        }
        function getVitorias()
        {
            return $this->vitorias;
        }
        function getDerrotas()
        {
            return $this->derrotas;
        }
    }

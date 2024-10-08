<?php

    class Contato
    {
        private $id;
        private $nome;
        private $telefone;
        private $email;

        public function __construct($id, $nome, $telefone, $email)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->email = $email;
        }

        public function __toString()
        {
            return "</br>Nome: {$this->nome}, Telefone: {$this->telefone}";
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function getEmail()
        {
            return $this->email;
        }
    }

?>
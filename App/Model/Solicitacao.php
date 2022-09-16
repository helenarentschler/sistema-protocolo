<?php

class Solicitacao {
    
    private $nome;
    private $email;
    private $desc;
    private $ano;
    private $status;
    private $data;

    public function __set($prop, $value) {
        $this->$prop = $value;
    }

    public function __get($prop) {
        return $this->$prop;
    }

}
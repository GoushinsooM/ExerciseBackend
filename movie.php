<?php

class Filme{
    
    private $titulo;
    private $genero;
    private $classificacao;
    private $duracao;
    
    
    public function __construct($nome_filme, $genero, $restricao_idade){
        $this->nome_filme = $nome;
        $this->genero = $genero;
        $this->restricao_idade = $restricao_idade;
    }
    
    public function getNomeFilme($nome_filme){
        return $this->nome_filme; 
    }
    
    public function setNomeFilme($nome_filme){
        $this->nome_filme = $nome_filme; 
    }
    
    public function getGenero($genero){
        return $this->genero; 
    }
    
    public function setGenero($genero){
        $this->genero = $genero; 
    }
    
    public function getRestricaoIdade($restricao_idade){
        return $this->nome_filme; 
    }
    
    public function setRestricaoIdade($restricao_idade){
        $this->restricao_idade = $restricao_idade; 
    }
    
}

Class Sala extends Filme{
    private $num_sala;
    private $num_cadeira_fila;
    private $horario;
    
    public function __construct($num_sala,$num_cadeira_fila){
        $this->num_sala = $num_sala;
        $this->num_cadeira_fila = $num_cadeira_fila;
    }

    public function getNumSala($num_sala){
        return $this->num_sala; 
    }
    
    public function setNumSala($num_sala){
        $this->num_sala = $num_sala;
    }
    
    public function getNumCadeiraFila($num_cadeira_fila){
        return $this->num_cadeira_fila;
    }
    
    public function setNumCadeiraFila($num_cadeira_fila){
        $this->num_cadeira_fila = $num_cadeira_fila;
    }

}
Class Ingresso extends Cliente{
    private $ingresso_meia;
    
    public function __construct($ingresso_meia){
        $this->ingresso_meia = $ingresso_meia;
    }
    public function getIdadeCliente($idade_cliente){
        if ($ingresso_meia < 18){
            return $this->idade_cliente; 
        }
        return false;
    }
    public function getIngressoMeia($ingresso_meia){
        if ($idade_cliente < 18){
            return $this->ingresso_meia;
        }
        return false;
    }
    
    public function setIngressoMeia($ingresso_meia){
        $this->ingresso_meia = $ingresso_meia;
    }
}
class Cliente{

    private $nome_cliente;
    private $idade_cliente;
    
    public function __construct($nome_cliente, $carteira_estudante,$idade_cliente){
        $this->nome_cliente = $nome_cliente;
        $this->idade_cliente = $idade_cliente;
    }
    public function getnome_cliente($nome_cliente){
        return $this->nome_cliente; 
    }
    
    public function setNomeCliente($nome_cliente){
        $this->nome_cliente = $nome_cliente;
    }
    
    public function getIdadeCliente($idade_cliente){
        return $this->idade_cliente; 
    }
    
    public function setIdadeCliente($idade_cliente){
        $this->idade_cliente = $idade_cliente;
    }
    
}

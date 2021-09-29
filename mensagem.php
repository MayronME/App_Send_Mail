<?php
class Mensagem {
    private $para = null;
    private $assunto =null;
    private $mensagem =null;
    public $status = ['codigo_status' => null, 'descricao_status' => null];

    public function __get($atributo)
    {
        return $this->$atributo;
    }
    public function __set($atributo, $valor)
    {
        $this-> $atributo = $valor;
    }
    public function mensagemValida(){
        if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
            return false;
        }
        return true;
    }
}
?>
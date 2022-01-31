<?php 
class Product {
    public $nome;
    public $descrizione;
    public $marca;
    public $formato;
    public $prezzo;

    public function __construct($_nome, $_descrizione, $_marca, $_formato, $_prezzo){
        $this->nome = $_nome;
        $this->descrizione = $_descrizione;
        $this->marca = $_marca;
        $this->formato = $_formato;
        $this->prezzo = $_prezzo;
    }
}
?>
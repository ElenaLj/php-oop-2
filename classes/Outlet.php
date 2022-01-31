<?php
class Outlet extends Product {
    public $productCondition; 

    public function __construct($_nome, $_descrizione, $_marca, $_formato, $_prezzo, $_productCondition)
    {
        parent::__construct($_nome, $_descrizione, $_marca, $_formato, $_prezzo);
        $this->productCondition = $_productCondition;
    }

    // se la condizione del prodotto è false non applicare lo sconto del 30%, se true applica lo sconto
    public function setDiscount(){
        if($this->productCondition == true) {
            $this->productCondition = $this->prezzo * 0.3;
        }
    }

}
?>
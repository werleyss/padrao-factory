<?php 
require_once "./ComidaFactory.php";
require_once "./Pizza.php";

class PizzaFactory implements ComidaFactory{
    public function criarComida($id) : Comida
    {
        if($id == 0){
            $p = new Pizza();
            $p->nome = "Pizza de calabresa";
            $p->sabor1 = "Calabresa";
            $p->sabor2 = "Queijo";
            $p->comPalmito = false;
            $p->bordaComRecheio = false;
            return $p;
        }elseif($id == 1){
            $p = new Pizza();
            $p->nome = "Pizza de Frango";
            $p->sabor1 = "Frango";
            $p->sabor2 = "Queijo";
            $p->comPalmito = true;
            $p->bordaComRecheio = true;
            return $p;
        }else{
            $p = new Pizza();
            $p->nome = "Pizza de Misto";
            $p->sabor1 = "Presuto";
            $p->sabor2 = "Queijo";
            $p->comPalmito = true;
            $p->bordaComRecheio = false;
            return $p;
        }
    }
}
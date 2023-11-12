<?php

namespace Classes;

require_once "Dice.php";

class Dices
{
 private array $_dicesValue = [];

 public  function  __construct()
 {
     $dice = new Dice();
     $this->_dicesValue[] = $dice ->getValue();
     $dice ->ThrowDice();
     $this->_dicesValue[] = $dice ->getValue();
 }

    public function getDicesValueImage():string
    {
        $result = "";
        /**
         * @var $valueDice int
         */
        foreach ($this->_dicesValue as $index =>  $valueDice){
            $result = <<< RESULT_ACCUMULYTOR
            $result <img class='dice' src='Image/Dice/$valueDice.png'>
            RESULT_ACCUMULYTOR;
        }
        return  $result;
    }
}
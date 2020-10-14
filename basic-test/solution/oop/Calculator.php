<?php

    class Calculator {

        private $currentValue = 0;

        function __construct($value){
            $this->currentValue = $value;
        }

        public function add($value){
            $this->currentValue += $value;
        }

        public function subtract($value){
            $this->currentValue -= $value;
        }

        public function multiply($value){
            $this->currentValue *= $value;
        }

        public function divide($value){
            if( $value != 0 ) {
                $this->currentValue /= $value;
            }
        }

        public function getCurrentValue(){
            return $this->currentValue;
        }

    }

    $operations = [];
    $values=[];
    if ($file = fopen($argv[1], "r")) {
        while(!feof($file)) {
            $line = fgets($file);
            $exploded = explode(" ",$line);
            $operation = $exploded[0];
            $value = $exploded[1];
            if (strcmp($operation,"apply") === 0 ) {
                $calc = new Calculator($value);
                $index=-1;
                foreach($operations as $operation){
                    $index++;                  
                    call_user_func_array(array($calc,$operation), array(intval($values[$index])));
                }
                print_r($calc->getCurrentValue() . "\n");
            } else {
                array_push($operations,$operation);
                array_push($values,$value);
            }
        }
        fclose($file);
    }

?>
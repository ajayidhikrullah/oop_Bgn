<?php

    class Calc{
        public $operator;
        public $num1;
        public $num2;


        public function __construct(string $operator, int $num1, int $num2){
            $this->operator = $operator;
            $this->num1 = $num1;
            $this->num2 = $num2;

        }

        // this functions created to be re-used
        private function add(){
            $result = $this->num1 + $this->num2;
            return $result;
        }

        private function subtract(){
            $result = $this->num1 - $this->num2;
            return $result;
        }

        private function divide(){
            $result = $this->num1 / $this->num2;
            return $result;
        }

        private function multiply(){
            $result = $this->num1 * $this->num2;
            return $result;
        }




        public function calculator(){
            switch ($this->operator) {
                // var_dump($this->operator);

                case 'add':
                    //  $result = $this->num1 + $this->num2;
                    //  return $result;
                    return $this->add();
                    break;
                case 'sub':
                    // $result = $this->num1 - $this->num2;
                    // return $result;
                    return $this->subtract();
                    break;      
                case 'div':
                    // $result = $this->num1 / $this->num2;
                    // return $result;
                    return $this->divide();
                    break;
                case 'mul':
                    // $result = $this->num1 * $this->num2;
                    // return $result;                
                    return $this->multiply();
                default:
                    echo "Error o...";
                    break;
            }
        }

}



?>
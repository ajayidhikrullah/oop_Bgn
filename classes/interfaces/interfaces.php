<?php



















/*
interface PaymentInterface {
    public function PayNow();
}
    class Paypal implements PaymentInterface, LoginInterface {
        public function loginFirst(){};
        public function payNow(){}
        public function paymentProcess(){
            $this->loginFirst();
            $this->payNow();
        }
    }

    class Visa implements PaymentInterface, LoginInterface{
        public function payNow(){}
        public function paymentProcess(){
            $this->payNow();
        }
    }

    class Cash implements PaymentInterface{
        public function payNow(){}
        public function paymentProcess(){
            $this->payNow();
        }
    }


    //buy product class using the above method and classes
    class BuyProduct {
        public function pay(PaymentInterface $paymentType){
            $paymentType->paymentProcess();
        }

        public function onlinePay(loginInterface $paymentType){
            $paymentType->paymentProcess();
        }
    }


    $paymentType = new Cash();
    $buyProduct = new BuyProduct();
    $buyProduct->pay($paymentType);
*/

?>
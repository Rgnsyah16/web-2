<?php

class bankcostumer{
    private string $customerName;
    private string $address;
    private string $email;
    private string $card;
    protected string $acc;


    //constructor
    public  function __construct(){
        $this->email = "ini_email_defauld_@gmail.com";
    }

    // destruct
    public function __destruct()
    {
        echo "koneksi sudah selesai";
    }
     
    public function setCustumerName ($custumerName){
        $this->customerName = $custumerName;
    }
 
    public function setAddress ($address){
        $this->address = $address;
    }

    public function setEmail ($email){
        $this->email = $email;
    }

    public function setCard ($card){
        $this->card = $card;
    }

    public function setAcc ($acc){
        $this->acc =$acc;
    
    }
    public function insertCard(){
        echo "kartu dimasukkan : <br>";
        echo "nama costumer: " . $this->customerName , '<br>';
        echo "alamat : "  . $this->address , '<br>';
        echo "card : "  . $this->card , '<br>';
        echo "acc :" .$this->acc , '<br>';

    }

    public function SelectTransction(){

    }

    public function enterPIN(int $number){
        echo "PIN telah di enter :" .$number;

    }

    public function changePIN(){

    }

    public function WithDrawCash(){

    }

    public function requestTransactionSummary(){

    }

    public function acceptAmount(){

    }
}
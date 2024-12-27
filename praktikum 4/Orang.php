<?php

class Orang{
    protected $nama; 

    public function setNama($nama){

    }

    public function ucapSalam(){
        echo "perkenalkan nama saya " . $this->nama. "<br>"; 
    }
}
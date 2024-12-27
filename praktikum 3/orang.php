<?php

 class orang{
    public $Nama;

    public function __construct ($nama)
    {
        $this->Nama = $nama;
    } 

    public function ucapSalam(){
        echo "Hallo nama saya " .$this->Nama . "<br>";

    }
 }
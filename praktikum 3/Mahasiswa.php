<?php
    include "orang.php";
    
    class Mahasiswa extends orang {
        public $nim;
        public $prodi;

        public function getNilaiSemester(){

        }
    }

    class MahasiswaAsing extends Mahasiswa{

        //override
        public function ucapSalam(){
            echo"Hello My Name " . $this->Nama . "<br>";
        }
    }
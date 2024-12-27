<<<<<<< HEAD
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
=======
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
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570
    }
<<<<<<< HEAD
<?php

require_once "Orang.php";
require_once "Nilai.php";

class Mahasiswa extends Orang{
    protected $nim;
    protected Nilai $nilai;

    public function setNim ($nim){
        $this->nim = $nim;
    }

    public function setNilai($nilai){
        $this->nilai = $nilai;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getNilai(){
        return $this->nilai;
    }
    
       public function tampilkanData(){
        echo "Nama : " . $this->nama . "<br>";
        echo "Nim : " . $this->nim . "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS : " . $this->nilai->getUts() . "<br>";
        echo "Nilai UAS : " . $this->nilai->getUas() . "<br>";    
     } 
    
=======
<?php

require_once "Orang.php";
require_once "Nilai.php";

class Mahasiswa extends Orang{
    protected $nim;
    protected Nilai $nilai;

    public function setNim ($nim){
        $this->nim = $nim;
    }

    public function setNilai($nilai){
        $this->nilai = $nilai;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getNilai(){
        return $this->nilai;
    }
    
       public function tampilkanData(){
        echo "Nama : " . $this->nama . "<br>";
        echo "Nim : " . $this->nim . "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS : " . $this->nilai->getUts() . "<br>";
        echo "Nilai UAS : " . $this->nilai->getUas() . "<br>";    
     } 
    
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570
}
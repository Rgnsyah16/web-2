<<<<<<< HEAD
<?php

 // Nilai.php

 class Nilai{
    private $tugas;
    private $uts;
    private $uas;

    // Setter
    public function setTugas($tugas){
        if ($tugas >= 0 && $tugas <= 100){
            $this ->tugas = $tugas;
        }
    }

    public function setUts ($uts){
        if ($uts >= 0 && $uts <=100){
            $this ->uts = $uts;
        }
    } 

    public function setUas ($uas){
        if ($uas >= 0 && $uas <=100) {
            $this ->uas = $uas;
        }
    }

    //Getter
    public function getTugas (){
        return $this->tugas;
    }
    public function getUts (){
        return $this->uts;
    }
    public function getUas (){
        return $this->uas;
    }

    public function getTotalNilai (){
        $totalNilai = 0.3 * $this->tugas = 0.35 * $this->uts + 0.35 * $this->uas;
        return $totalNilai;
    }
=======
<?php

 // Nilai.php

 class Nilai{
    private $tugas;
    private $uts;
    private $uas;

    // Setter
    public function setTugas($tugas){
        if ($tugas >= 0 && $tugas <= 100){
            $this ->tugas = $tugas;
        }
    }

    public function setUts ($uts){
        if ($uts >= 0 && $uts <=100){
            $this ->uts = $uts;
        }
    } 

    public function setUas ($uas){
        if ($uas >= 0 && $uas <=100) {
            $this ->uas = $uas;
        }
    }

    //Getter
    public function getTugas (){
        return $this->tugas;
    }
    public function getUts (){
        return $this->uts;
    }
    public function getUas (){
        return $this->uas;
    }

    public function getTotalNilai (){
        $totalNilai = 0.3 * $this->tugas = 0.35 * $this->uts + 0.35 * $this->uas;
        return $totalNilai;
    }
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570
}  
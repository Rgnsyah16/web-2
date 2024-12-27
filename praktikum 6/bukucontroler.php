<<<<<<< HEAD
<?php

require_once "model/daftarbuku.php";

class bukucontroller {
    public function jalankan() {
        $data = new daftarbuku(); 
        // Mengirimkan variabel $data ke view
        include "view/bukuview.php";
    }
}
=======
<?php

require_once "model/daftarbuku.php";

class bukucontroller {
    public function jalankan() {
        $data = new daftarbuku(); 
        // Mengirimkan variabel $data ke view
        include "view/bukuview.php";
    }
}
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570

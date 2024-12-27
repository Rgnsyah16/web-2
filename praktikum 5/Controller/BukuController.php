<<<<<<< HEAD
<?php 

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
    // mengakses model
    $data = new DaftarBuku();

    // memberi data model ke view dan mwnampilkan view
    include "View/BukuView.php";
    }

}
=======
<?php 

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
    // mengakses model
    $data = new DaftarBuku();

    // memberi data model ke view dan mwnampilkan view
    include "View/BukuView.php";
    }

}
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570

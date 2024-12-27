<<<<<<< HEAD
<?php

require_once "Buku.php";

class DaftarBuku{
    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar pemrograman web', 'Emely w.', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Rinaldi Munir', 'Andi Publisher', '2020'),
            new Buku ('Kalkulus', 'Robert T', 'Erlangga', '2010'),
            new Buku('Metodologi Penelitian', 'James W.', 'Pustaka UIN', '2024'),
        );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
    
=======
<?php

require_once "Buku.php";

class DaftarBuku{
    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar pemrograman web', 'Emely w.', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Rinaldi Munir', 'Andi Publisher', '2020'),
            new Buku ('Kalkulus', 'Robert T', 'Erlangga', '2010'),
            new Buku('Metodologi Penelitian', 'James W.', 'Pustaka UIN', '2024'),
        );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
    
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570
}
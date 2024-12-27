<<<<<<< HEAD
<?php

require_once "buku.php";
require_once  "database/database.php";

class daftarBuku {
    public function getdata (){
        $db =new  Database();
        $koneksi =$db->getkoneksi();

        $daftar_buku =[];

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query ($sql);

        if($query ->num_rows > 0){
            while ($row = $query->fetch_assoc ()){
                $buku = new buku ($row ['Judul'] , $row ['Pengarang'], $row['Penerbit'], $row ['Tahun']) ;
                array_push ( $daftar_buku ,$buku);
            }
        }
        return $daftar_buku;
    }
    public function getKolomTable(){
        return array ('no','judul','pengarang', 'penerbit','tahun');
    }
=======
<?php

require_once "buku.php";
require_once  "database/database.php";

class daftarBuku {
    public function getdata (){
        $db =new  Database();
        $koneksi =$db->getkoneksi();

        $daftar_buku =[];

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query ($sql);

        if($query ->num_rows > 0){
            while ($row = $query->fetch_assoc ()){
                $buku = new buku ($row ['Judul'] , $row ['Pengarang'], $row['Penerbit'], $row ['Tahun']) ;
                array_push ( $daftar_buku ,$buku);
            }
        }
        return $daftar_buku;
    }
    public function getKolomTable(){
        return array ('no','judul','pengarang', 'penerbit','tahun');
    }
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570
}
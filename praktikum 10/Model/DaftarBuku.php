<?php

require_once "Buku.php";
require_once "Database/Database.php";

class DaftarBuku{

    private $koneksi;

    public function __construct(){
        $db = new Database();
        $this->koneksi = $db->getKoneksi();
    }

    public function getData(){
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $buku = new Buku($row['Judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                $buku->setId($row['id']);
                array_push($daftar_buku, $buku);
            }
        }

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('id_buku', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }

    public function simpan($buku){
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "INSERT INTO buku (Judul, pengarang, penerbit, tahun) VALUES ('".$buku->getJudul()."', '".$buku->getPengarang()."', '".$buku->getPenerbit()."', '".$buku->getTahun()."')";

        $query = $koneksi->query($sql);
        return $query;
    }
    

    public function hapus($id){
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "DELETE FROM buku WHERE id = " . $id;

        $query = $koneksi->query($sql);

        return $query;
    }
    // var_dump("ok");
       // die();

    public function update($buku){
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "UPDATE buku SET Judul = '".$buku->getJudul()."', pengarang = '".$buku->getPengarang()."', penerbit = '".$buku->getPenerbit()."', tahun = ".$buku->getTahun()." WHERE id = ". $buku->getId();

        $query = $koneksi->query($sql);
        return $query;
    }
    

    public function getBukuById($id){

    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "SELECT * FROM buku WHERE id = " . $id;

    $query = $koneksi->query($sql);

    if($query->num_rows > 0){
        $data = $query->fetch_assoc();

        $buku = new Buku($data['Judul'], $data['pengarang'], $data['penerbit'], $data['tahun']);
        $buku->setId($data['id']);

        return $buku;
    }

    return false;
}

}
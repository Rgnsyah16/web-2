<<<<<<< HEAD
<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $DBname = 'perpustakaan';
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->DBname);
    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
=======
<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $DBname = 'perpustakaan';
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->DBname);
    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570
}
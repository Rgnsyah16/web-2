<<<<<<< HEAD
<?php

class database {
    private $host='localhost';
    private $username='root';
    private $password='';
    private $databaseName='perpustakaan';
    private $koneksi;

    public function __construct()
    {
        $this ->koneksi=new mysqli ($this->host, $this->username, $this->password,$this->databaseName, );
    }
            public function __destruct()
            {
                $this->koneksi->close();
            }
            public function getkoneksi (){
                return $this ->koneksi;
            }
}
    
    
=======
<?php

class database {
    private $host='localhost';
    private $username='root';
    private $password='';
    private $databaseName='perpustakaan';
    private $koneksi;

    public function __construct()
    {
        $this ->koneksi=new mysqli ($this->host, $this->username, $this->password,$this->databaseName, );
    }
            public function __destruct()
            {
                $this->koneksi->close();
            }
            public function getkoneksi (){
                return $this ->koneksi;
            }
}
    
    
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570

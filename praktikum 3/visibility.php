<?php

// visibility.php

class visibility{

    public $public = 'Public';
    private $private = 'Private';
    protected $protected = 'Protected';

    function tampilkandata(){
        echo "Akses di dalam kelas <br>";
        echo "Public: " . $this->public . "<br>";
        echo "private: " . $this->private. "<br>";
        echo "Protected : " .$this->protected . "<br>";
    }
}
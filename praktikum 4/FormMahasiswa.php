<<<<<<< HEAD
<?php

class Form{
    protected $fields;

    public function __construct()
    {
        $this->fields = [];
    }
    
    public function setTextFields ($nama, $text){
        $label = "<div class='wrapper'><label for='".$nama."'>".$nama."</label>";
        $textfields = "<input class='form-input' type='text' name='".$nama."' ></div>";
        array_push($this->fields, $label . $textfields);
    }

    public function tampilkanForm(){
        echo "<form >";
            foreach($this->fields as $fields){
                echo $fields;
            }
        echo "<input type='submit' value='Simpan'>";
        echo "</form>";    
    }
}

class FormMahasiswa{

=======
<?php

class Form{
    protected $fields;

    public function __construct()
    {
        $this->fields = [];
    }
    
    public function setTextFields ($nama, $text){
        $label = "<div class='wrapper'><label for='".$nama."'>".$nama."</label>";
        $textfields = "<input class='form-input' type='text' name='".$nama."' ></div>";
        array_push($this->fields, $label . $textfields);
    }

    public function tampilkanForm(){
        echo "<form >";
            foreach($this->fields as $fields){
                echo $fields;
            }
        echo "<input type='submit' value='Simpan'>";
        echo "</form>";    
    }
}

class FormMahasiswa{

>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570
}
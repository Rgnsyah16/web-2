<html lang="en">
<head>

    <title>Pratikum 3</title>
</head>
<body>
        <div class="">
            <?php
        include "Visibility.php";

        $visibility = new visibility();
        $visibility ->tampilkanData();

        echo "<br>";

        echo "Akses di luar kelas <br>";
        echo "Public: " . $visibility->public . '<br>';
        // echo "Private: " . $visibility->private . '<br>';
        // echo "Protected: " . $visibility->protected . '<br>';

        echo "<br><br>";
        echo "<h2>Konsep Pewarisan </h2>";

        include "Mahasiswa.php";

        $mahasiswa = new Mahasiswa ("Rega ardiansah");
        $mahasiswa->ucapSalam();

        $mahasiswaiInggris = new MahasiswaAsing ("Bruno Mars");
        $mahasiswaInggris->ucapSalam();
         ?>

        </div>
</body>
</html>
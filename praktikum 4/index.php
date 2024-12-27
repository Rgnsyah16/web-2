<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
</head>
<body>
    <hi>Konsep Pewarisan</hi>
    <div class="">
        <?php
         require_once "OrangBiasa.php";
         require_once "OrangInggris.php";
         require_once "Mahasiswa.php";

         $james = new OrangBiasa();
         $james->setNama("REGA ARDIANSAH");
         $james->ucapSalam();

         echo "<br>";

         $rano = new OrangInggris();
         $rano->setNama("BEDOL");
         $rano->ucapSalam();

         echo "<br>";

         $mahasiswa = new Mahasiswa();
         $mahasiswa->setNama('REGA ARDIANSAH');
         $mahasiswa->setNim("701230060");

         $nilaiMahasiswa = new Nilai();
         $nilaiMahasiswa->setTugas (70);
         $nilaiMahasiswa->setUts(60);
         $nilaiMahasiswa->setUas(90);

         $mahasiswa->setNilai($nilaiMahasiswa);

         $mahasiswa->ucapSalam();
         $mahasiswa->tampilkanData();

    ?>
    </div>     
</body>
</html>
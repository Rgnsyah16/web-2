<<<<<<< HEAD
<!-- nilaimahasiswa.php -->
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,th,td {
            border:1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 4px;
        }
        </style>
    <title>Nilai Mahasiswa</title>
 </head>
 <body>
     <h2>Nilai Mahasiswa</h2>
     <table>
     <thead>
        <tr>
            <th>no</th>
            <th>Nama</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TotalNilai</th>
        </tr>
     </thead>
     </table>
 </body>
     <?php
     include "Nilai.php";
     $mhs1 = new Nilai ();
     $mhs1->setTugas (90);
     $mhs1->setUts (85);
     $mhs1->setUas (95);

     $mhs2 = new Nilai ();
     $mhs2->setTugas (56);
     $mhs2->setUts (78);
     $mhs2->setUas (65);

     $mhs3 = new Nilai ();
     $mhs3->setTugas (90);
     $mhs3->setUts (90);
     $mhs3->setUas (90);

     echo "<tr>
         <td>1</td>
         <td>Rega Ardiansah </td>
         <td>" , $mhs1->getTugas(), "</td>
         <td>" , $mhs1->getUts(), "</td>
         <td>" , $mhs1->getUas(), "</td>
         <td>" , $mhs1->getTotalNilai(), "</td>
         <?tr>";

         echo "<tr>
         <td>1</td>
         <td>Aldi Darmawan </td>
         <td>" , $mhs2->getTugas(), "</td>
         <td>" , $mhs2->getUts(), "</td>
         <td>" , $mhs2->getUas(), "</td>
         <td>" , $mhs2->getTotalNilai(), "</td>
         <?tr>";

         echo "<tr>
         <td>1</td>
         <td>Muhammad Nafiz </td>
         <td>" , $mhs3->getTugas(), "</td>
         <td>" , $mhs3->getUts(), "</td>
         <td>" , $mhs3->getUas(), "</td>
         <td>" , $mhs3->getTotalNilai(), "</td>
         <?tr>";
         ?>
         </tbody>
    </table>
    </body>
=======
<!-- nilaimahasiswa.php -->
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,th,td {
            border:1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 4px;
        }
        </style>
    <title>Nilai Mahasiswa</title>
 </head>
 <body>
     <h2>Nilai Mahasiswa</h2>
     <table>
     <thead>
        <tr>
            <th>no</th>
            <th>Nama</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TotalNilai</th>
        </tr>
     </thead>
     </table>
 </body>
     <?php
     include "Nilai.php";
     $mhs1 = new Nilai ();
     $mhs1->setTugas (90);
     $mhs1->setUts (85);
     $mhs1->setUas (95);

     $mhs2 = new Nilai ();
     $mhs2->setTugas (56);
     $mhs2->setUts (78);
     $mhs2->setUas (65);

     $mhs3 = new Nilai ();
     $mhs3->setTugas (90);
     $mhs3->setUts (90);
     $mhs3->setUas (90);

     echo "<tr>
         <td>1</td>
         <td>Rega Ardiansah </td>
         <td>" , $mhs1->getTugas(), "</td>
         <td>" , $mhs1->getUts(), "</td>
         <td>" , $mhs1->getUas(), "</td>
         <td>" , $mhs1->getTotalNilai(), "</td>
         <?tr>";

         echo "<tr>
         <td>1</td>
         <td>Aldi Darmawan </td>
         <td>" , $mhs2->getTugas(), "</td>
         <td>" , $mhs2->getUts(), "</td>
         <td>" , $mhs2->getUas(), "</td>
         <td>" , $mhs2->getTotalNilai(), "</td>
         <?tr>";

         echo "<tr>
         <td>1</td>
         <td>Muhammad Nafiz </td>
         <td>" , $mhs3->getTugas(), "</td>
         <td>" , $mhs3->getUts(), "</td>
         <td>" , $mhs3->getUas(), "</td>
         <td>" , $mhs3->getTotalNilai(), "</td>
         <?tr>";
         ?>
         </tbody>
    </table>
    </body>
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570
 </html>
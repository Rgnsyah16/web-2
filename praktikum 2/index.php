<?php
include "orang.php";
include "BankCustomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>
    <div class="di">
        <?php
            $nasabah = new BankCostumer();
            $nasabah->setcustumerName ('Rega ardiansah');
            $nasabah->setAddress ('Simpang Rimbo, Kota Jambi');
            $nasabah->setEmail ('regaardiansah812@gmail.com');
            $nasabah->setCard ('Platinum');
            $nasabah->setAcc ('Wadiah');

            $nasabah->insertCard();
            $nasabah->enterPIN(123456);
           
            ?>
    </div>
</body>
</html>

<!-- localhost/index.php?nama=Rega -->
<!--http.//uinjambi.ac.id/berita?page=1 -->
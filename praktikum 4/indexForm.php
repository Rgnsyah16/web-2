<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper{
            padding: 18px;
        }
        .form-input{
            display:block;
        }
        </style>
    <title>Form dengan OOP</title>
</head>
<body>
    <?php
         require_once "FormMahasiswa.php";

         $form = new Form();
         $form->SetTextFields('Nama', '');
         $form->setTextFields('Nim', '');
         $form->SetTextFields('Prodi', '');
         $form->setTextFields('Fakultas', '');
         $form->tampilkanForm();
         ?>
</body>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper{
            padding: 18px;
        }
        .form-input{
            display:block;
        }
        </style>
    <title>Form dengan OOP</title>
</head>
<body>
    <?php
         require_once "FormMahasiswa.php";

         $form = new Form();
         $form->SetTextFields('Nama', '');
         $form->setTextFields('Nim', '');
         $form->SetTextFields('Prodi', '');
         $form->setTextFields('Fakultas', '');
         $form->tampilkanForm();
         ?>
</body>
>>>>>>> 1334fd67f395e3891086625f0f27f3d79a260570
</html>
<?php 
$mahasiswa = ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
     <h1>Daftar Mahasiswa</h1>
     <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
<!--         
        <li><?= $mahasiswa[0]; ?></li>
        <li><?= $mahasiswa[1]; ?></li>
        <li><?= $mahasiswa[2]; ?></li>
        <li><?= $mahasiswa[3]; ?></li> 
-->
     </ul>
 </body>
 </html>
<?php 
$mahasiswa = [
   [
      "nama" => "Sandhika Galih", 
      "nrp" => "043040023",
      "email" => "sandhikagalih@unpas.ac.id",
      "jurusan" => "Teknik Informatika",
      "gambar" => "sandhika.jpg"
   ],
   [
      "nama" => "Doddy Ferdiansyah", 
      "nrp" => "033040001",
      "email" => "doddy@yahoo.com",
      "jurusan" => "Teknik Industri",
      "gambar" => "doddy.jpg"
   ]
];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>GET</title> 
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach ($mahasiswa as $mhs) : ?>
   <li>
   <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"> <?= $mhs["nama"]; ?></a> 
   </li>
<?php endforeach; ?>
</ul>

</body>
</html>
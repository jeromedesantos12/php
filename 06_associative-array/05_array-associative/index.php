<?php 
$mahasiswa = ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id","Teknik Informatika"];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<ul>
 		<li><?php= $mahasiswa[0]; ?></li>
 		<li><?php= $mahasiswa[1]; ?></li>
 		<li><?php= $mahasiswa[2]; ?></li>
 		<li><?php= $mahasiswa[3]; ?></li>
 	</ul>
 </body>
 </html>
<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Komentar
// ini adalah komentar
// ini juga komentar
/* 
ini komentar
ini juga komentar
*/

// Standar Output
// echo, print
// print_r (isi array) - utk debugging
// var_dump (melihat isi var) - utk debugging
echo "Sandhika Galih"; echo "<br>";
print "Sandhika Galih"; echo "<br>";

print_r ("Sandhika Galih"); echo "<br>";
var_dump("Sandhika Galih"); echo "<br><br>";

// kutip
// echo 'Jum'at'; // salah!
echo "Jum'at"; echo "<br><br>";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP (tdk disarankan)
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Halo, Selamat Datang <?php echo "Sandhika"; ?></h1>
	<p><?php echo "ini adalah paragraf"; ?></p>

	<?php 
		echo "<h1>Halo, Selamat Datang Sandhika</h1>";
	 ?>
</body>
</html>

<?php 
// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tetapi boleh mengandung angka
$nama = "Sandhika";
echo "Halo, nama saya $nama"; echo "<br>";
echo 'Halo, nama saya $nama'; // interpolasinya gk kebaca 
echo "<br><br>";

// Operator
// aritmatika
// + - */ %
$x = 10;
$y = 20;
echo $x * $y;
echo "<br><br>";

// penggabung string / concatenation / concat
// . (kalo di js +)
$nama_depan = "Sandhika";
$nama_belakang = "Galih";
echo $nama_depan . " " . $nama_belakang; 
echo "<br><br>";

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x-= 5;
echo $x;
echo "<br><br>";

$nama = "Sandhika";
$nama .= " ";
$nama .= "Galih";
echo $nama;
echo "<br><br>";

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 5); echo "<br>";
var_dump(1 > 5); echo "<br>";
var_dump(1 == 1); echo "<br>";
var_dump(1 == "1"); echo "<br><br>";

// identitas
// ===, !==
var_dump(1 === "1"); echo "<br><br>";

// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0); echo "<br>";
// 1 * 1 = 1

$y = 30;
var_dump($y < 20 && $y % 2 == 0); echo "<br>";
// 1 * 0 = 0

$y = 30;
var_dump($y < 20 || $y % 2 == 0); echo "<br>";
// 1 + 0 = 1
 ?>
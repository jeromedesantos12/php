<?php 
// Built-in Function

// Date
// untuk menampilkan tanggal dengan format tertentu
echo "Hari ini: <br>" . 
date("l, d-M-Y") . 

"<br><br>";

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu dari 1 Januari 1970
echo "Detik sekarang: <br>" . 
time() . 

"<br><br>";

echo "100 hari dari sekarang adalah: <br>" . 
date("d M Y", time() + 60 * 60 * 24 * 100) . 

"<br><br>";

echo "100 hari ke belakang adalah: <br>" . 
date("d M Y", time() - 60 * 60 * 24 * 100) . 

"<br><br>";

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo "Saya lahir hari: <br>" . 
date("l", mktime(0,0,0,12,12,1998)) . 

"<br><br>";

// str to time
echo "Saya lahir hari: <br>" . 
date("l", strtotime("12 dec 1998")) . 

"<br><br>";
 ?>
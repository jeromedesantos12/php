<?php 
// variable Scope / lingkup variabel
$x = 10;

function tampilx() {
	global $x;
	echo $x;
} 
tampilX();
 ?>
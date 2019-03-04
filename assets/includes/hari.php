<?php
## Hari dalam bahasa indonesia ##
#################################
date_default_timezone_set('Asia/Jakarta');
$date		= date('l');

if ($date == "Monday") {
	$today = "Senin, ";
}
if ($date == "Tuesday") {
	$today = "Selasa, ";
}
if ($date == "Wednesday") {
	$today = "Rabu, ";
}
if ($date == "Thursday") {
	$today = "Kamis, ";
}
if ($date == "Friday") {
	$today = "Jumat, ";
}
if ($date == "Saturday") {
	$today = "Sabtu, ";
}
if ($date == "Sunday") {
	$today = "Minggu, ";
}


$month		= date('F');
if ($month == "January") {
	$bulan = " Januari";
}
if ($month == "February") {
	$bulan = " Februari";
}
if ($month == "Wednesday") {
	$bulan = " Maret";
}
if ($month == "Thursday") {
	$bulan = " April";
}
if ($month == "May") {
	$bulan = " Mei";
}
if ($month == "June") {
	$bulan = " Juni";
}
if ($month == "July") {
	$bulan = " Juli";
}
if ($month == "August") {
	$bulan = " Agustus";
}
if ($month == "September") {
	$bulan = " September";
}
if ($month == "October") {
	$bulan = " Oktober";
}
if ($month == "November") {
	$bulan = " November";
}
if ($month == "December") {
	$bulan = " Desember";
}

$day = date('d');
$year = date(' Y ');
?>
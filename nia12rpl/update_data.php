<?php

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];

$database = new PDO('mysql:host=localhost;nia12rpl','root','');

$query = $database->query("UPDATE `tbsiswa` SET `nama`='$nama',`kelas`='$kelas' WHERE `nis`='$nis'");

header('location:tampilan_data.php');
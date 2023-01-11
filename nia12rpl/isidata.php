<?php

// session_start();

 $nis = $_POST['nis'];
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];

 $database = new PDO("mysql:host=localhost;dbname=nia12rpl",'root','');
 $query = $database->query("insert into tb_siswa values('$nis','$nama','$kelas')");


 if($query){
    header("Location:tampilan_data.php");
 }

 
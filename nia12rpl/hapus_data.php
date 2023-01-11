<?php 

$nis = $_GET['nis'];

$database = new PDO("mysql:host=localhost;dbname=nia12rpl",'root','');
$query = $database->query("DELETE FROM tb_siswa where nis = '$nis'");

if($query){
   header("Location:tampilan_data.php");
}
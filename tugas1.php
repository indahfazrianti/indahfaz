<?php
$nama=$_POST['nama'];
$nim=$_POST['nim'];
if($nama==""){
	header("location:tugas1.php?nama=kosong");	
} else{
	echo "Nama anda adalah ".$nama;

}
if($nim==""){
	header("location:tugas1.php?nim=kosong");	
} else{
	echo "<br> Nim anda adalah ".$nim;
}
?>
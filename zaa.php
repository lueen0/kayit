<?php 
$baglanti = new mysqli("localhost" , "root" , "" , "lueen");
$sorgu= "INSERT INTO uyeler (isim , sifre ) VALUES ('".$_POST['mail']."','".$_POST['sifre']."')";
$baglanti->query($sorgu);
//print_r($_POST);

header("Location: s.php")

?>






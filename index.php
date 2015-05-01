<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
<?php 
session_start();

if(isset($_SESSION['kadi']))
{
	echo "<br>Hosgeldiniz ".$_SESSION['kullanici']."</br>";
	echo '<br><a href="cikis.php">Cikis</a></br>';
}
else
{   
	echo "<h1>Sisteme Kayit Yapamadiniz</h1>";
	echo '<a href="giris.php">Giris</a></br>';
	echo '<a href="kayit.php">Kayit</a></br>';
}

 ?>
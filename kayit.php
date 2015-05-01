<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
<?php if(!$_POST){ ?>
<h1>KAYİT</h1>
<form method="POST">
    <input type="text" name="kadi" placeholder="adiniz" ><br />
    <input type="password" name="sifre" placeholder="sifreniz"><br />
    <input type="submit" name="giris" value="KAYIT OL">
</form>
<?php  }
else if(!empty($_POST['kadi']) && !empty($_POST['sifre']))
{       
	    $kadi=$_POST['kadi'];
	    $sifre=$_POST['sifre'];
	 	include "ayar.php";
	 	$varmi=$db->prepare("SELECT * FROM uyeler WHERE kadi=:kadi ");
	 	$varmi->execute(array(':kadi'=>$kadi));
        if($varmi->rowCount()<1)
        {
			$insert=$db->prepare("INSERT INTO uyeler (kadi,sifre) VALUES(:kadi,:sifre)");
			$insert->bindParam(':kadi',$kadi);
			$insert->bindParam(':sifre',$sifre);
			$insert->execute();
			if($insert)
			{
				echo "İşlem Başarılı.Yönlendiriliyorsunuz.";
	            header("Refresh:3;url=giris.php");
			}
			else
		    {
		    	echo "İşlem Başarısız,Yönlendiriliyorsunuz.";
	            header("Refresh:3;url=kayit.php"); 
		    }
		}
		else
		{
	        echo "HATA aynı kullanıcı adı mevcut Yönlendiriliyorsunuz Tekrar Deneyiniz";
	        header("Refresh:3;url=kayit.php");
	    }			
}
else
{
	echo "Kullaci Adi ve Sifre Bos Birakilamaz Tekrar Deneyiniz Yonlendiriliyorunuz";
	header("Refresh:3;url=kayit.php");
}
 ?>
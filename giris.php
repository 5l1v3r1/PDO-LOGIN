<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
<?php if(!$_POST) { ?>
<table>
<h1>Giris</h1>
<form method="POST">
    <input type="text" name="kadi" placeholder="Kullanıcı Adı"><br />
    <input type="password" name="sifre" placeholder="Parola"><br />
    <input type="submit">
</form>
</table>
<?php }
    else if(!empty($_POST['kadi']) && !empty($_POST['sifre']))
    { 
        session_start();
        if(isset($_POST['kadi']) && isset($_POST['sifre'])){
            require 'ayar.php';
            $sorgu = $db->prepare("SELECT kadi, sifre FROM uyeler WHERE kadi=:kadi AND sifre=:sifre");
            //$sorgu->bindParam(':kadi',$_POST['kadi']);
            //$sorgu->bindParam(':sifre',$_POST['sifre']);
            //$sorgu->execute();
            $sorgu->execute(array(':kadi'=>$_POST['kadi'],':sifre'=>$_POST['sifre'])); 
            //bindParam'lı 3 satır ile tek satır array aynı işlevi yaparlar
            if($sorgu->rowCount()>0) 
            //bulunan sıfır sayısı sıfırdan büyükse
            { 
              $row=$sorgu->fetch(); //PDO nesnelerini kullanabilmemiz için fetch yapmalıyız
              $_SESSION['kadi']=$row['kadi'];
              echo "Giris Basarili Yonlendiriliyorsunuz";
              header("Refresh:3;url=index.php");
            }
            else
            {
                echo "Giriş Başarısız Yönlendiriliyorsunuz.";
                header("Refresh:3;url=giris.php");
            }  
        }
    }
    else
    {
        echo "Kullaci Adi ve Sifre Bos Birakilamaz Tekrar Deneyiniz Yonlendiriliyorunuz";
        header("Refresh:3;url=giris.php");
    }
?>
<?php
require_once('baglanti.php');
session_start();
if($_POST['isim']!="")
{
    if($_POST['mezunyili']=="")
    {
        $mezunyili="NULL";
    }
    else
    {
        $mezunyili=$_POST['mezunyili'];
    }
    $isim=$_POST['isim'];
    $dogumyili=$_POST['dogumyili'];
   
    $ekle=$baglanti->query("INSERT INTO ogrencilistesi (isim,dogumyili,mezunyili) values ('".$isim."','".$dogumyili."',".$mezunyili.")");
        if($ekle)
        {
            header("Location:liste.php");
        }
        else
        {
            $_SESSION['hata']="Öğrenci Eklenemedi";
            header("Location:liste.php");
        }
}
else
{
    $_SESSION['hata']="Öğrenci Eklenemedi";
    header("Location:liste.php");
}

?>
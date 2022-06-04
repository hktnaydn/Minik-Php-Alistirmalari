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
    $id=$_POST['id'];
    $guncelleact=$baglanti->query("UPDATE ogrencilistesi SET isim='".$isim."',dogumyili='".$dogumyili."',mezunyili=".$mezunyili." WHERE id=".$id."");
        if($guncelleact)
        {
            header("Location:liste.php");
        }
        else
        {
            $_SESSION['hata']="Öğrenci Güncellenmedi";
            header("Location:liste.php");
        }
}
else
{
    $_SESSION['hata']="Öğrenci Güncellenmedi";
    header("Location:liste.php");
}

?>
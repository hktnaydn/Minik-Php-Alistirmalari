<?php
require_once('baglanti.php');
session_start();
$sil=$baglanti->query("DELETE from ogrencilistesi WHERE id ='".$_GET['$id']."'");
if($sil)
{
    header("Location:liste.php");
}
?>
<?php 
require_once('config.php');
$baglanti=new mysqli($server,$username,$password,$dbname);
$baglanti->set_charset("utf8");
if($baglanti->connect_error)
{
    die("Veritabanı Bağlantı Hatası");
}
?>
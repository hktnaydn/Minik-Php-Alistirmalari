<?php 
$server="localhost";
$username="root";
$password="safranbolu78";
$dbname="ogrenciler";
$baglanti=new mysqli($server,$username,$password,$dbname);
$baglanti->set_charset("utf8");
if($baglanti->connect_error)
{
    die("Veritabanı Bağlantı Hatası");
}
?>
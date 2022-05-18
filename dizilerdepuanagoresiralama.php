<?php
$ogrenciler=array(
    ["not"=>"100","isim"=>"Halil"],
    ["not"=>"65","isim"=>"Berat"],
    ["not"=>"25","isim"=>"Ceren"],
    ["not"=>"68","isim"=>"Deniz"],
    ["not"=>"82","isim"=>"Beril"],
    ["not"=>"93","isim"=>"Ferhat"],
    ["not"=>"71","isim"=>"Gökhan"],
    ["not"=>"17","isim"=>"Anıl"],   
    ["not"=>"28","isim"=>"Hakan"],
    ["not"=>"39","isim"=>"Leyla"],
);
// Öğrencileri notlarına göre büyükten küçüğe doğru sıralama fonksiyonu 
rsort($ogrenciler);
// Sıralanmış halde olan diziyi yazdırma 
foreach ($ogrenciler as $ogrenci) {
    echo "<strong>Ogrencinin ismi :</strong>&nbsp&nbsp".$ogrenci['isim']."&nbsp&nbsp<strong>Notu :</strong>&nbsp&nbsp".$ogrenci['not']."<br>";
}

// Son öğrenci en düşük nota sahip olduğu için son öğrencinin indisini alma
$sonogrenci=count($ogrenciler);
$sonogrenci--;

echo "<strong>En Yüksek Nota Sahip Öğrencinin İsmi:</strong>&nbsp&nbsp".$ogrenciler[0]['isim']."&nbsp&nbsp<strong>Notu:</strong>&nbsp&nbsp".$ogrenciler[0]['not']."<br>";
echo "<strong>En Düşük Nota Sahip Öğrencinin İsmi:</strong>&nbsp&nbsp".$ogrenciler[$sonogrenci]['isim']."&nbsp&nbsp<strong>Notu:</strong>&nbsp&nbsp".$ogrenciler[$sonogrenci]['not']."<br>";
?>
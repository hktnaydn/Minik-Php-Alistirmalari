<?php
function hr(){
    echo "<hr>";
}
function br(){
    echo "<br>";
}



function karesivekupu($sayi,$isObject=false){
    $karesi=$sayi*$sayi;
    $kupu=$sayi*$sayi*$sayi;
    $sonuc=array("karesi"=>$karesi,"kupu"=>$kupu);

    //Eğer object true ise diziyi obje olarak döndür
    if($isObject)
    {
       return (object)$sonuc;
    }
    // değilse array olarak döndür
    return $sonuc;
}


//array
var_dump(karesivekupu(2));
$karevekup=karesivekupu(2);
br();
echo "karesi ".$karevekup["karesi"];
echo " küpü ".$karevekup["kupu"];
br();



// object
hr();
var_dump(karesivekupu(2,true));
$karevekupobject=karesivekupu(2,true);
br();
echo "karesi ".$karevekupobject->karesi;
echo " küpü ".$karevekupobject->kupu;
?>
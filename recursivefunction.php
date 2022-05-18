<?php 

function diziElemanlariniYazdirma($dizi){
    foreach($dizi as $eleman)
    {
        if(! is_array($eleman))
        {
        echo "<strong>".$eleman."</strong>"."<br>";
        }
        else{
            
            foreach($eleman as $alteleman){
                if(! is_array($alteleman))
                {
                echo "--".$alteleman."<br>";
                }
                else{
                    foreach($alteleman as $dahaalteleman)
                    {
                        echo "----".$dahaalteleman."<br>";
                    }
                }
            }
        }
    }
}


function recursiveDiziElemanlariniYazdirma($dizi){
    foreach($dizi as $eleman)
    {
        if(! is_array($eleman))
        {
        echo $eleman."<br>";
        }
        else{
            
            recursiveDiziElemanlariniYazdirma($eleman);
        }
    }
}




$dizi=[
    "elma",
    ["yeşil elma","kırmızı elma"],
    "armut",
    ["ekşi armut","tatlı armut"],
    "karpuz",
    ["çekirdekli karpuz","çekirdeksiz karpuz"],
    "hurma",
    ["taze hurma","kuru hurma",["medine hurması","şam hurması"]]
];

diziElemanlariniYazdirma($dizi);
echo "<hr>";
echo "<strong> RECURSİVE </strong> <br><br>";
recursiveDiziElemanlariniYazdirma($dizi);


?>
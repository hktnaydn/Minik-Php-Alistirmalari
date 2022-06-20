<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Soru 1</h1><br>
        <table border=1 style="padding:5px">
            <?php
            for ($k = 1; $k <= 10; $k++) { ?>
                <tr>
                    <?php
                    for ($i = 1; $i <= 100; $i++) {

                        if ($i >= 0 && $i <= 10 && $k==1) {
                    ?>
                            <td> <?php echo $i; ?> </td>
                    <?php
                        }
                    }
                    ?>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>
    <hr>
    <div>
        <h1>Soru 4</h1><br>
        <?php
        $array=[
        0=>[
            0=>[
                0=>1,
                1=>2,
            ],
            1=>[
                0=>3,
                1=>4,
            ]
        ],
        1=>[
            0=>[
                0=>5,
                1=>6,
            ],
            1=>[
                0=>7,
                1=>8,
            ]
        ]
    ]; 
        var_dump($array);
        ?>
    </div>
    <div>
        <h1>Soru 5</h1><br>
        <?php
        $array=[
        "Python"=>[
            "First_release"=>1991,
            "latest_release"=>"3.8.0",
            "designed_by"=>"GVR",
            "description"=>[
                "extension"=>".py",
                "typing_discipline"=>"Dynamic",
                "lisence"=>"PSFL",
            ]
        ],
        "PHP"=>[
            "First_release"=>1995,
            "latest_release"=>"7.3.1",
            "designed_by"=>"RL",
            "description"=>[
                "extension"=>".php",
                "typing_discipline"=>"Dynamic",
                "lisence"=>"PHP ZEL",
            ]
        ]
    ]; 
        var_dump($array);
        ?>
    </div>
    <div>
        <h1>Soru 6,,,</h1><br>
        <?php
        $array=[
        "0"=>[
            "Adi"=>"Elif",
            "Soyadi"=>"Dursun",
            "il"=>"Çanakkale",
            "yas"=>"23"

        ],
        "1"=>[
            "Adi"=>"Murat",
            "Soyadi"=>"Dursun",
            "il"=>"Kocaeli",
            "yas"=>"21"
        ],
        "2"=>[
            "Adi"=>"Kasım",
            "Soyadi"=>"Dursun",
            "il"=>"İstanbul",
            "yas"=>"14"
        ],
        "3"=>[
            "Adi"=>"Metin",
            "Soyadi"=>"Dursun",
            "il"=>"İzmir",
            "yas"=>"17"
        ],
        "4"=>[
            "Adi"=>"Hakan",
            "Soyadi"=>"Dursun",
            "il"=>"Sakarya",
            "yas"=>"20"
        ],
        
    ]; 
        print_r($array);
        ?><br><br>
        <table>
            <thead>
                <tr>
                <th>Ad</th>
                <th>Soyad</th>
                <th>İl</th>
                <th>Yaş</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($array as $key => $value) {
                    ?>
                <tr>
                    <td><?php  echo $value["Adi"]; ?></td>
                    <td><?php  echo $value["Soyadi"]; ?></td>
                    <td><?php  echo $value["il"]; ?></td>
                    <td><?php  echo $value["yas"]; ?></td>
                </tr>
                    <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
    <div>
        <h1>soru 7 random sayılar üretip diziye ekleme</h1>
        <?php 
         $randomdizi=[];
         for ($i=0; $i < 10; $i++) { 
            echo $random=rand(1,10)."<br>";
            
            if(count($randomdizi)<=10)
            {
               array_push($randomdizi,$random);
            }       
           
         }
         echo "Karıştırıldı; <br>";
         shuffle($randomdizi);
       foreach($randomdizi as $rd){
        
        echo $rd;
       }
        ?>
    </div>
    <div>
        <h1>soru 8 </h1>
        <?php 
        $oturum=[];
       
        if(isset($_GET['adi'])){

       
            if($_GET["adi"]!="" && $_GET["soyadi"]!="" && $_GET["email"]!="" && $_GET["cepno"]!="" && $_GET["dgunu"]!="" && $_GET["renk"]!="")
            {
                $oturum=[
                    "adi"=>$_GET["adi"],
                    "soyadi"=>$_GET["soyadi"],
                    "email"=>$_GET["email"],
                    "cepno"=>$_GET["cepno"],
                    "dgunu"=>$_GET["dgunu"],
                    "renk"=>$_GET["renk"],
                ];
            } }
            if(count($oturum)!=0)
            { print_r($oturum);}
       
        ?>
        <form action="" method="GET">
            <strong>adı</strong>
            <input type="text" name="adi"><br><br>
            <strong>soyadi</strong>
            <input type="text" name="soyadi"><br><br>
            <strong>email</strong>
            <input type="email" name="email"><br><br>
            <strong>soyadi</strong>
            <input type="text" name="cepno"><br><br>
            <strong>soyadi</strong>
            <input type="text" name="dgunu"><br><br>
            <strong>renk</strong>
            <input type="text" name="renk">
            <input type="submit" value="olustur" name="olustur">
        </form>
    </div>
</body>

</html>
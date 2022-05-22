<?php 

    $username=NULL;
    $gender=NULL;
    $cinsiyetler=["erkek","kadın"];
    $viewed=[];
    $product_id=$_GET['id'];
    // Giriş yapılmamışsa
    if(!isset($_COOKIE['username']) OR !isset($_COOKIE['gender']))
    {
        if(isset($_POST['username']) AND isset($_POST['gender']) AND isset($_POST['birthyear']))
        {
                    if((date('Y')-$_POST['birthyear'])>=18)
                    {
                        $username=$_POST['username'];
                        $gender=$_POST['gender'];
                        setcookie('username',$username);
                        setcookie('gender',$gender);
                    }
                    else{
                        setcookie('error','Yaşınız tutmuyor!',time()+1);
                        header('Location:login.php');
                    }
        }
        else
        {
                        setcookie('error','Bilgiler Eksik!',time()+1);
                        header('Location:login.php');
        }
    }
    // Giriş Yapılmışsa
    else {
        $username=$_COOKIE['username'];
        $gender=$_COOKIE['gender'];
    }
?>
<?php
//Alkoller Dizisi
$alkoller=[
    "1"=>[
        "name"=>"Bira",
        "image"=>"https://static.birgun.net/resim/haber-detay-resim/2022/01/14/bira-fiyatlari-2022-guncel-967822-5.jpg",
        "price"=>"20",
        "description"=>"Bira, dünyadaki en eski ve en yaygın alkollü içeceklerden biridir. Su ve çaydan sonra en popüler üçüncü içecek konumundadır. Bira tahıldan üretilirː Yaygın olarak malt arpa kullanılır ama buğday, mısır ve pirinç de kullanılan ürünler arasındadır.",
    ],
    "2"=>[
        "name"=>"Viski",
        "image"=>"https://static.birgun.net/resim/haber-detay-resim/2021/12/14/viski-fiyatlari-2021-guncel-955423-5.jpg",
        "price"=>"100",
        "description"=>"Viski, arpa, buğday, çavdar veya mısırdan damıtılarak yapılan ve meşe fıçılarda dinlendirilerek olgunlaştırılan bir tür alkollü içkidir. İsmi İrlanda ve İskoçya lehçelerinde yaşam suyu anlamına gelen uisge beathadan gelmektedir.",

    ],
    "3"=>[
        "name"=>"Votka",
        "image"=>"https://www.guncelfiyat.net/wp-content/uploads/2017/10/votka-fiyatlari.jpg",
        "price"=>"100",
        "description"=>"Votka veya orijinal ismiyle Vodka, Polonya ve Rusya menşeili, farklı çeşitlere sahip, şeffaf bir distile alkollü içkidir. Temelde su ve rektifiye etanolden oluşur, bazı diğer maddeler ve aroma izleri bulunabilir.",

    ],
]
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkoller</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body{
                margin:15px;
            }
        </style>
    </head>
    <body>
        <!-- Eğer erkekse Eğer kadınsa -->
    <div class="alert <?php if($cinsiyetler[$gender]=="erkek"){ ?> alert-success <?php } else{  ?> alert-danger <?php   }?>">
        <strong>Ürün Detayları!</strong> 
    </div>
    <?php 
            if(isset($_COOKIE['error']))
            {
                ?>
            <div class="alert alert-warning">
                <strong>Hey!</strong><?php  echo $_COOKIE['error']; ?>
            </div>
            <?php 
        }
        ?>
    <a href="products.php" class="btn btn-info" role="button">AnaSayfa</a>
<hr>    <br>
        <h2>Ürünlerimiz</h2><br>
        <div class="row">
            <?php 
                foreach($alkoller as $id=>$alkol)
                { 
                    
                   if($id==$product_id) {?>
                       <div class="col-sm-4">
                           <h4><?php echo $alkol["name"]; ?></h4>
                           <img src="<?=$alkol["image"]; ?>" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                           <p><?php echo $alkol["description"]; ?></p>
                           
                        </div>
                <?php }
                }
            ?>
</div>
    </body>
</html>
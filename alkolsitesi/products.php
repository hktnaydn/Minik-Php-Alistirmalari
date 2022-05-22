<?php 

    $username=NULL;
    $gender=NULL;
    $cinsiyetler=["erkek","kadın"];
    $viewed=[];
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
        if(isset($_COOKIE['viewproducts'])) $viewed=unserialize($_COOKIE['viewproducts']);
    }
?>
<?php
// var_dump($viewed);
//Alkoller Dizisi
$alkoller=[
    "1"=>[
        "name"=>"Bira",
        "image"=>"https://static.birgun.net/resim/haber-detay-resim/2022/01/14/bira-fiyatlari-2022-guncel-967822-5.jpg",
        "price"=>"20",
    ],
    "2"=>[
        "name"=>"Viski",
        "image"=>"https://static.birgun.net/resim/haber-detay-resim/2021/12/14/viski-fiyatlari-2021-guncel-955423-5.jpg",
        "price"=>"100",
    ],
    "3"=>[
        "name"=>"Votka",
        "image"=>"https://www.guncelfiyat.net/wp-content/uploads/2017/10/votka-fiyatlari.jpg",
        "price"=>"100",
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
        <strong>Hoşgeldin!</strong> <?php echo $username ?>
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
    <a href="logout.php" class="btn btn-danger" role="button">Çıkış Yap</a>
<hr>    <br>
        <h2>Ürünlerimiz</h2><br>
        <div class="row">
            <?php 
                foreach($alkoller as $id=>$alkol)
                { 
                    ?>
                       <div class="col-sm-4"> 
                           <h4 <?php if(in_array($id,$viewed)) { ?> style="color:red" <?php }?>><?php echo $alkol["name"]; ?></h4>
                         <a href="product.php?id=<?php echo $id;?>">  <img src="<?=$alkol["image"]; ?>" alt="" class="img-responsive"> </a>
                        </div>
                <?php
                }
            ?>
</div>
    </body>
</html>
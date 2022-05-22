<?php 

    $username=NULL;
    $gender=NULL;

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
                        setcookie('error','Yaşınız tutmuyor!',time()+5);
                        header('Location:login.php');
                    }
        }
        else
        {
                        setcookie('error','Bilgiler Eksik!',time()+5);
                        header('Location:login.php');
        }
    }
    // Giriş Yapılmışsa
    else {
        $username=$_COOKIE['username'];
        $gender=$_COOKIE['gender'];
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkoller</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="alert alert-success">
        <strong>Hoşgeldin!</strong> <?php echo $username ?>
    </div>
     
    <a href="logout.php" class="btn btn-danger" role="button">Çıkış Yap</a>


    </body>
</html>
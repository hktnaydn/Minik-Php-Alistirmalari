<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>

<body>
<?php
include('inc/front-end/navbar.php');
yetkimekanizmasi('guest');
if($_POST)
{
        if($_POST['email']!="" AND $_POST['password']!="")
        {
            $email=$_POST['email'];
            $sifre=$_POST['password'];
            $login=$baglanti->query("SELECT * FROM users where email='".$email."' AND password='".$sifre."'");
            $user=mysqli_fetch_assoc($login);
            //dd(mysqli_fetch_assoc($login));
            if(!$user)
            {
                echo "Bilgiler Sistemimizde Eşleşmedi";
            }
            else{
                
            
                    $userid=$user['id'];
                    $email=$user['email'];
                    $name=$user['name'];
                    $typeid=$user['type_id'];
                
                $_SESSION['user_id']=$userid;
                $_SESSION['email']=$email;
                $_SESSION['type_id']=$typeid;
                
                header('location:index.php');
            }
        }
        else{
            echo "Alanları doldurunuz";
        }
}
?>
    <div id="login">
        <h3 class="text-center text-white pt-5">Giriş formu</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="post">
                            <h3 class="text-center text-info">Giriş</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">E posta:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Şifre:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Giriş Yap">
                            </div>
                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
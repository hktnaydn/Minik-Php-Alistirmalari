<?php 

    $username=NULL;
    $gender=NULL;

    // Giriş yapılmamışsa
    if(isset($_COOKIE['username']) OR isset($_COOKIE['gender']))
    {
        setcookie('error','Zaten Giriş Yaptınız!',time()+5);
                        header('Location:products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkol Giriş</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h1>Giriş Yap</h1>
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
            <p>Sitemize giriş yapmak için 18 yaşında olmanız gerekmektedir.</p>
            <form action="products.php" method="post">
                <div class="form-group">
                    <label for="name">İsminiz</label>
                    <input type="name" name="username" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="pwd">Yaşınız</label>
                    <select class="form-control" id="sel1" name="birthyear">
                    <option disabled selected>Doğum Tarihiniz</option>
                        <?php 
                            for($i=1980; $i<=date('Y'); $i++){
                                echo '<option value="'.$i.'">'.$i.'</option>';  
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label >Cinsiyet</label> <br>
                    <label for="e">Erkek </label><input value="0" type="radio" name="gender" id="e">
                    <label for="k">Kadın </label><input value="1" type="radio" name="gender" id="k">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </body>
</html>
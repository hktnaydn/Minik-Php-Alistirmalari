<?php
require_once('baglanti.php');
session_start();
?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Öğrenci Ekle</title>
  </head>
  <body>
    <h1><?php if(isset($_SESSION['hata'])) {echo $_SESSION['hata']; unset($_SESSION['hata']);} ?></h1>
    <h3><a href="ekle.php" class="link-danger">Öğrenci Ekle</a></h3>
    <?php
      $sorgu=$baglanti->query("select * from ogrencilistesi")
    ?>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
            <th scope="col">İsim</th>
            <th scope="col">Doğum Yılı</th>
            <th scope="col">Mezun Yılı</th>
            <th scope="col">İşlemler</th>
            </tr>
        </thead>
        <tbody>
          <?php 
          while($row=mysqli_fetch_array($sorgu)){
            ?>
            <tr>
            <td><?=$row['isim']?></td>
            <td><?=$row['dogumyili']?></td>
            <td><?php if(is_null($row['mezunyili'])) echo "Mezun Değil"; else {echo $row['mezunyili'];}?></td>
            <td><a href="sil.php?$id=<?=$row['id']?>" class="link-danger">Sil</a><br><a href="guncelle.php?$id=<?=$row['id']?>" class="link-warning">Güncelle</a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
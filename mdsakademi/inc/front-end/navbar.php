<?php
session_start();
require_once('inc/global.php');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MDS AKADEMİ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">ANASAYFA <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">PANEL <span class="sr-only">(current)</span></a>
      </li>
      <?php if(isset($_SESSION['user_id']))
      { ?>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">ÇIKIŞ YAP</a>
      </li>
      <?php
      }
      else { ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">GİRİŞ YAP</a>
      </li>
<?php
      }
?>   
    </ul>
  </div>
</nav>
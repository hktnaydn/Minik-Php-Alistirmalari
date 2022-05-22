<?php

    setcookie('username',NULL,time()-1);
    setcookie('gender',NULL,time()-1);
    setcookie('error',"Çıkış Yapıldı",time()+1);
    header('location:login.php');
?>
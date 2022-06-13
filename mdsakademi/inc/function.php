<?php


function dd($any){
    die(var_dump($any));
}

function yetkimekanizmasi($yetki){
    switch ($yetki) {
        case 'guest':
            if(isset($_SESSION['user_id']))
            {
                header('location:index.php');
            }
            break;    
       
        case 'registered':
            if(isset($_SESSION['user_id']))
            {
                
            }
            else{
                header('location:login.php');
            }
            break;
       
    }
}
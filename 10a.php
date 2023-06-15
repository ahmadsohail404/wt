<?php
 $time = 60*24*60*60 + time();
 setcookie('last_visit', date('d-m-y H:i:s'), $time);

 if(!isset($_COOKIES['last_visit'])){
    echo $_COOKIE['last_visit'];
 }
 else{
    echo "No Visit";
 }


?>
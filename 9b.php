<?php
session_start();

if(isset($_SESSION['count'])){
    $_SESSION['count']++;
}
else{
    $_SESSION['count'] = 0;
}

echo "Total visitors: " . $_SESSION['count'];
?>
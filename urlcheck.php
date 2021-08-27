<?php

session_start();
if ($_SESSION['login']=='true'){
    header("Location: alogin.php");
}
else{
    header("Location: index.html");
}

?>
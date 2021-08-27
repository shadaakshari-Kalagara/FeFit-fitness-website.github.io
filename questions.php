<?php

session_start();
$_SESSION['ans']='false';

//Developer machine: refer login.php
$conn = new mysqli("remotemysql.com","FhAlcj4GWo","kePyKO0Zp3","FhAlcj4GWo");
if (isset($_POST['submit'])){
    $age = $_POST['age'];
    $occupation = $_POST['occupation'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $pref1 = $_POST['pref1'];
    $pref2 = $_POST['pref2'];

    $query = "INSERT INTO `questions` (`age`, `occupation`, `weight`, `height`, `pref1`, `pref2`) VALUES ('$age', '$occupation', '$weight', '$height', '$pref1', '$pref2')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        if ($age==='1' && $occupation === '1' && $weight < 3 && $height < 3 && $pref1 < 3 && ($pref2 === '6' || $pref2 === '5' )){
            session_start();
            $_SESSION['ans']='true';
            $_SESSION['routine']='1';
            header("Location: fitnessroutine1.html");
        }
        else if ($age==='2' && ($occupation === '2' || $occupation === '3') && ($weight === 3 || $weight === 4) && ($height === 3) && ($pref1 === 3 || $pref1 === 4) && ($pref2 === '6' || $pref2 === '5' )){
            session_start();
            $_SESSION['ans']='true';
            $_SESSION['routine']='2';
            header("Location: fitnessroutine2.html");
        }
        else{
            session_start();
            $_SESSION['ans']='true';
            $_SESSION['routine']='3';
            header("Location: fitnessroutine3.html");
        }
    }
    else{
        echo "<h2> Failed </h2>";
    }
} 

?>
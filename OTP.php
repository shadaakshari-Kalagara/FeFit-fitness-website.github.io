<?php

//input values
$uname = $_POST['uname'];
$num = $_POST['num'];

//for development machine: replace: remotemysql.com-localhost, FhAlcj4GWo-root, kePyKO0Zp3-"", FhAlcj4GWo-resgister
//database connection
$conn = new mysqli("localhost","root","","resgister");
if ($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("select * from registration where uname = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
		/*
        if ($data['pwd']===$pwd){

            
            $stmtt = $conn->prepare("insert into questions(uname) values(?)");
            $stmtt->bind_param("s", $uname);
            $stmtt->execute();
            $stmtt->close();
            $conn->close();
            
            session_start();
            $_SESSION['login']='true';

            //header("Location: urlcheck.php");
            //header("Location: alogin.php");
			*/
            header("Location: OTPver.php");
        /*}
        else {
            echo "<h2> Invalid username </h2>";
        }
		*/
    }
    else{
        echo "<h2> Invalid username </h2>";
    }
}

?>
<?php

//input values
$uname=$_POST['uname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];

//database connection
$conn = new mysqli('localhost','root','','resgister');
if ($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}
else {
    $stmt=$conn->prepare("select * from registration where uname = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0){
        echo "<h2> Username already exists. </h2>";
    }
    else{
        $stmt = $conn->prepare("insert into registration(uname, email, pwd) values(?, ?, ?)");
        $stmt->bind_param("sss", $uname, $email, $pwd);
        $stmt->execute();
        header("Location: loginp.html");
        $stmt->close();
        $conn->close();
    }

    //It should go to login page
}

?>
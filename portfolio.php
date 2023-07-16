<?php
$enquiry=$_POST['email'];
$questions=$_POST['questions'];

$conn=new mysqli('localhost','root','','portfolio');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into enquiry(email,questions)
    values(?,?)");
    $stmt->bind_param("ss",$email,$questions);
    $stmt->execute();
    echo("Registeration Successful...");
    $stmt->close();
    $conn->close();
}

?>
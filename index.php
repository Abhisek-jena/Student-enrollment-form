<?php
        // put your code here
       // $query="SELECT * FROM `regiser`";
        $rollNo= $_POST['rollNo'];
        $fullName= $_POST['fullName'];
        $className= $_POST['className'];
        $birthDate= $_POST['birthDate'];
        $address= $_POST['address'];
        $enrollmentDate= $_POST['enrollmentDate'];
        
        
        $conn = new mysqli('localhost','root',' ','test');

if ($conn->connect_error) {
     die('Connection failed: ' . $conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into registration(rollNo,fullName,className,birthDate,address,enrollmentDate)values(?,?,?,?,?,?)");
    $stmt->bind-param("issdsd",$rollNo,$fullName,$className,$birthDate,$address,$enrollment);
    $stmt->execute();
    
echo "connection successfully";
$stmt->close();
$conn->close();
        }
        

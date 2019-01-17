<?php
echo $_POST['fname'];
echo  $_POST['lname'];

$servername = "localhost";
$username = "root";
$password = "root";

$data = [
    'fname' => $_POST['fname'],
    'lname' => $_POST['lname'],
    'email'=>$_POST['email'],
    'phone'=>$_POST['phone'],
    'gender' => $_POST['gender'],
    'addr' => $_POST['addr'],
    'bday' =>$_POST['bday'],
    'quali' =>$_POST['quali'],

];
try {
    $conn = new PDO("mysql:host=$servername;dbname=ClientInfo", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO ClientDetails (fname, lname,email,phone ,gender, addr, bday, quali) VALUES (:fname, :lname, :email, :phone, :gender, :addr, :bday, :quali)";
    $stmt = $conn->prepare($sql); 
    $stmt->execute($data);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    $conn = null;
 
    $obj=new Candidate;
    $obj->setFname($_POST['fname']);
    $obj->getFname();

    $obj->setLname($_POST['lname']);
    $obj->getLname();

    $obj->setEmail($_POST['email']);
    $obj->getEmail();

    $obj->setPhone($_POST['phone']);
    $obj->getPhone();
?>
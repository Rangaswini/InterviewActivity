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
$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
$txt = "    fname:".$_POST['fname']."   lname:".$_POST['lname']."   email:".$_POST['email']."   phone:".$_POST['phone']."   gender:".$_POST['gender']." Address:".$_POST['addr']."  DOB:".$_POST['bday']."  qualification:".$_POST['quali'];
fwrite($myfile, $txt);
fclose($myfile);
try {
    $conn = new PDO("mysql:host=$servername;dbname=info", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    $sql="INSERT INTO jobInfo (fname, lname,email,phone ,gender, addr, bday, quali) VALUES (:fname, :lname, :email, :phone, :gender, :addr, :bday, :quali)";
    $stmt = $conn->prepare($sql); 
    $stmt->execute($data);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    $conn = null;

?>
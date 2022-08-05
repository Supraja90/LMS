
<?php
$servername = "127.0.0.1";
$username = "root";
$Password = '';
$dbname = "lms";
$rnum=$_POST['rnum'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$program=$_POST['program'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$mobilenum=$_POST['mobilenum'];
$pname=$_POST['pname'];
$pnum=$_POST['pnum'];
$user=$_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $Password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $SQL="INSERT INTO admin (rnum,name,gender,program,branch,sem,mobilenum,pname,pnum,user,password,confirmpassword,status)VALUES('$rnum','$name','$gender','$program','$branch','$sem','$mobilenum','$pname','$pnum','$user',MD5('$password') ,MD5('$confirm'),'STUDENT')";
    $conn->exec($SQL);
    }
catch(PDOException $e)
    {
    }

$conn = null;

include "login.php";
  ?>
 
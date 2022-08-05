<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/> 
<title>Blob File MySQL</title>
<style>
body {
  background-color: bisque;
}
.course-notes__heading {
  font-size: 40px;
  text-align: center;
}
.my_form {
  border: 3px #333333 solid;
  width: 800px;
  margin: auto;
  padding: 10px;
  text-align: center;
  display: flex;
  justify-content: space-between;
}
</style>
</head>
<body>
<?php
$dbh = new PDO("mysql:host=localhost; dbname=mydata", "root", "");
if(isset($_POST['btn'])){
$name = $_FILES['myfile']['name'];
$type = $_FILES['myfile']['type'];
$data = file_get_contents($_FILES['myfile']['tmp_name']);
$stmt = $dbh->prepare("insert into myblob values('',?,?,?)");
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$type);
$stmt->bindParam(3,$data);
$stmt->execute();
}
?>
<h3 class="course-notes__heading">Course Notes</h3>
<?php
$stat=$dbh->prepare("select * from myblob");
$stat->execute();
while($row = $stat->fetch()){
echo "<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a></li>";
}
?>
</ol>
</body>
</html>
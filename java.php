<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
           <h1>Java Notes</h1>
           <title>Blob File Mysql</title>
           <br> </br>
           <a href="javaadd.php?action=add"  style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add</a>
        <a href="javadelpopup.php?action=delete" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Delete</a>
        <br> </br>
            </div>    
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
  width: 600px;
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
$dbh = new PDO("mysql:host=localhost; dbname=lms", "root", "");
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
<p></p>
<ol>
<?php
$stat=$dbh->prepare("select * from myblob");
$stat->execute();
while($row = $stat->fetch()){
echo "<li><a target='_blank' href='upload/view.php?id=".$row['id']."'>".$row['name']."</a></li>";
}
?>
</ol>
</body>
<?php include 'footer.php'; ?>
</html>           
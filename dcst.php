<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
           <h1>DCST Notes</h1>
           <title>LMS</title>
           <br> </br>
           <a href=dcstadd.php?action=add"  style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Add</a>
        <a href=dcstdelpopup.php?action=delete" style="background-image: linear-gradient();> type="button" class="btn btn-xs btn-info">Delete</a>
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
$stmt = $dbh->prepare("insert into myblob2 values('',?,?,?)");
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$type);
$stmt->bindParam(3,$data);
$stmt->execute();
}
?>
<p></p>
<ol>
<?php
$stat=$dbh->prepare("select * from myblob2");
$stat->execute();
while($row = $stat->fetch()){
echo "<li><a target='_blank' href='upload/view2.php?id=".$row['id']."'>".$row['name']."</a></li>";
}
?>
</ol>
</body>
<?php include 'footer.php'; ?>
</html>           
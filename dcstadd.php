<?php include 'connection.php';
include 'topnav.php'; ?>
<style>
.containers  {
  display: flex-flow;
  position: abstract;
  top: 0;
  left: 100;
  height: 50%;
  width: 100%;
}
.containers .row {
  margin: 0 auto;
} 
body {  
font-size: 100%;  
}    
h2 { font-family: sans-serif; }  
h6  { font-family: sans-serif; }    
}  
</style>
<div class="contaniers"> 
<div class="card card-register mx-auto mt-5">
<div class="card border-dark" >
<div class="card-header"style="background-image: linear-gradient(to bottom,#eacda3, #d6ae7b)"><h2>Add New Record</h2> </div>

<div class="card-body" style="background-image: linear-gradient(to top,#eacda3, #d6ae7b);">
                 
                            
                       
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
echo "Added";
}
?>

<form class="my_form" method="post" enctype="multipart/form-data">
    <input class="upload-btn" type="file" name="myfile" />
    <button name="btn">Upload</button>
</form>			

<p></p>
              


                      </form>  
                    </div>
                
</div> </div>
        </div>
     
 <?php include 'footer.php'; ?>
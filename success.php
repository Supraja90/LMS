<?php
require('connection.php');
session_start();
    $user = trim($_POST['user']);
    $upass = trim($_POST['pass']);
    $h_pass = MD5($upass);
      $sql = "SELECT * FROM `admin` WHERE `user` = '" .$user. "' AND `password` = '" . $h_pass . "' ";
      $result = $db->query($sql);
        
            if($result->num_rows > 0){
            
              $found_user = mysqli_fetch_array($result);

            
              $_SESSION['MEMBER_ID'] = $found_user['id'];
            $_SESSION['position'] = $found_user['status'];
            $_SESSION['usern']=$found_user['user'];
              if ($_SESSION['position']=='ADMIN') {
               
            ?> <script type="text/javascript">
               
                  window.location = "index.php"
            </script>
            <?php
             }else{
               ?> <script type="text/javascript">
              
                  window.location = "homepage.php"
            </script>
            <?php
             }

            }else{
    
            ?> <script type="text/javascript">
              alert("Username or Password Not Registered! Contact Your administrator.");
              window.location = "login.php";
              </script>
            <?php
            }
          
$db->close();
?>
<?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
						$csrollnum= $_POST['Rollnumber'];
						$cstype= $_POST['Subject'];
					    $cssub= trim($_POST['Suggestion']);
						
								$query = "INSERT INTO csbox
								(Rollnumber,Subject,Suggestion)
								VALUES ('".$csrollnum."','".$cstype."','".$cssub."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
					
				?>
    	<script type="text/javascript">
			alert("Successfully sent.");
			window.location = "usercsbox.php";
		</script>
                    </div>

<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php
					$query = 'DELETE FROM myblob1
							WHERE
							id = ' . $_POST['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = " dlca.php";
			</script>				

</body>
</html>
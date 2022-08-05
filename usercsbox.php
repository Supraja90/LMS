<?php include 'connection.php';
include 'utopnav.php' ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=Rollnumber], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Suggestion Box</h3>

<div class="container">
<form action="usercsboxadd.php?action=add" method="post">
    <label for="Rollnumber">Rollnumber</label>
    <input type="Rollnumber" id="Rollnumber" name="Rollnumber" placeholder="Your rollnumber..">

    <label for="Subject">Subject</label>
    <select id="Subject" name="Subject">
      <option value="Java Programming">Java Programming</option>
      <option value="Digital Logic and Computer Architecture">Digital Logic and Computer Architecture</option>
      <option value="DC circuits,Sensors and Transducers">DC circuits,Sensors and Transducers</option>
    </select>

    <label for="Suggestion">Suggestion</label>
    <textarea id="Suggestion" name="Suggestion" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

    
 <?php include 'footer.php'; ?>
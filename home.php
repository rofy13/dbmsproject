<?php include_once 'connection.php' ?>
<link rel="stylesheet" type="text/css" href="style.css">
<html>
<head>
</head>
<body>
<div id="main">
	<nav>
    <img src="logo.png" width="600" height="80">
		<ul>
			<li class="active"><a href="home.php">HOME</a></li>
            <li><a href="about.php">ABOUT US</a></li>
             <li><a href="login.php">ADMIN LOGIN</a></li>
        </ul>
    </nav>
</div>

<div class="container1">
<br>
<br>
<br>
<br>
<br>
<form method="POST" action="semester.php">
<label>Batch:</label><select name="batch">
<?php 
	$query="SELECT * FROM syllabus";
	$result=mysqli_query($con, $query);
	//loop
	foreach($result as $batch){
	?>
<option value="<?php echo $batch['SyllabusID']."-".$batch['SyllabusName']; ?>"><?php echo $batch['SyllabusName']; ?></option>
<?php
	}
?>
<br>
<input type="submit" value="submit" class="btn-login">
</form>
</div>
</body>
</html>
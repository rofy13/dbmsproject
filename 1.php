<?php include_once 'connection.php' ?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
</head>
<body>
<div id="main">
	<nav>
    <img src="jj.png" width="200" height="80">
		<ul>
			<li class="active"><a href="#">HOME</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">EXTRA</a></li>
        </ul>
    </nav>
</div>       

<div class="container">
<br>
<br>
<form method="POST">
BATCH:&nbsp&nbsp&nbsp &nbsp <select name="batch">
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
</select>
<br>
SEMESTER:<select name="sem">
<?php 
	$query="SELECT * FROM semester";
	$result=mysqli_query($con, $query);
	//loop
	foreach($result as $batch1){
	?>
<option value="<?php echo $batch1['SemID']."-".$batch1['SemesterName']; ?>"><?php echo $batch1['SemesterName']; ?></option>
<?php
	}
?>
</select>
<br>
<button formaction="2.php" class="btn-login">SYLLABUS</button>
<br>
<br>
<button formaction="3.php" class="btn-login">SEMPAPERS</button>
</form>
</div>
</body>
</html>
<?php include_once 'connection.php' ?>
<?php
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
?>
 <?php
 
	//exploading the batch values
	list($batch_Syllabusid,$batch_Syllabusname)=explode("-",$_POST['batch'],2);
	$batchs=$batch_Syllabusid;
	$batchname=$batch_Syllabusname; //simply used has no function
	
	
?>
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
<form method="POST">
<label>Semester:</label><select name="sem">
<?php 
	$query="SELECT * FROM semester WHERE SyllabusID=".$batchs."";
	$result=mysqli_query($con, $query);
	//loop
	foreach($result as $batch1){
	?>
<option value="<?php echo $batch1['SemID']."-".$batchs ?>"><?php echo $batch1['SemesterName']; ?></option>
<?php
	}
?>
</select>
<br>
<button formaction="syllabus.php" class="btn-login">syllabus </button>
<br>
<br>
<button formaction="subject.php" class="btn-login">sempapers</button>
</form>
</div>
</body>
</html>
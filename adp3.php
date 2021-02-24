<?php include_once 'connection.php' ?>
<?php
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
?>
 <?php
	
	//exploading semester values
	list($sem_SemId,$batch1)=explode("-",$_POST['sem'],2);
	$sems=$sem_SemId;
	$batch2=$batch1; //simply used has no function	
	
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
			<li><a href="home.php">HOME</a></li>
            <li><a href="about.php">ABOUT US</a></li>
             <li class="active"><a href="login.php">ADMIN LOGIN</a></li>
        </ul>
    </nav>
</div>
 
 <div class="container">
<form method="POST" enctype="multipart/form-data">
<label>SUBJECT:</label><select name="subject">
<?php 
	$query="SELECT * FROM subject WHERE SyllabusID=".$batch1." and SemID=".$sems."";
	$result=mysqli_query($con, $query);
	//loop
	foreach($result as $subject){
	?>
<option value="<?php echo $subject['SubjectID']."-".$subject['SubjectName']; ?>"><?php echo $subject['SubjectName']; ?></option>
<?php
	}
?>
</select>
<br>
    DATE: <select name="date">
		<option>MAY/JUNE</option>
		<option>NOV/DEC</option>
		</select>
		
		<p color="white">YEAR: <input  type="varchar" name="year"/></p></br>
		
	    <p color="white">PAPER LINK: <input  type="file" name="file"/></p></br>
<br>
<button formaction="adp4.php" class="btn-login">GO</button>
</form> 
</div>
 </body>
 </html>
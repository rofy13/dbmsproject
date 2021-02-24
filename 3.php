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
	
	//exploading semester values
	list($sem_SemId,$sem_Semestername)=explode("-",$_POST['sem'],2);
	$sems=$sem_SemId;
	$semname=$sem_Semestername; //simply used has no function	
?>
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

<div class="container1">
<form method="POST">
<br>
<br>
<br>
<br>
SUBJECT:<select name="subject">
<?php 
	$query="SELECT * FROM subject WHERE SyllabusID=".$batchs." and SemID=".$sems."";
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
<br>
<button formaction="4.php" class="btn-login">GO</button>
</form> 
</div>
 </body>
 </html>
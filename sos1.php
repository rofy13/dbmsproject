<?php include_once 'connection.php' ?>
<?php
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
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

<div class="container1">
<br>
<form method="POST" enctype="multipart/form-data">
<label>Batch:</label><select name="batch">
<?php 
	$query="SELECT * FROM syllabus";
	$result=mysqli_query($con, $query);
	//loop
	foreach($result as $batch){
	?>
<option value="<?php echo $batch['SyllabusID']."-".$batch['SyllabusName']; ?></br>"><?php echo $batch['SyllabusName']; ?></option>
<?php
	}
?>
</select>
<br>
  <p color="white">SEMESTER NAME: <input  type="varchar" name="semname"/></p></br>
  <p color="white">SYLLABUS COPY: <input  type="file" name="file"/></p></br>
  <br>
<button formaction="sos2.php" class="btn-login">GO</button>
</form>
</div>
</body>
</html>
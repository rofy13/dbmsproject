<?php include_once 'connection.php' ?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
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
<br>
<div class="container1">    
<br>
<br>
<form method="POST" action="arci.php">

  BATCH NAME:<input type="varchar" name="sname" /></p></br></br>

<input type="submit" value="ADD RC" class="btn-login">
<br>
</form>
</div>
</body>
</html>
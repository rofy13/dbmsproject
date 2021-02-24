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

<form name="form1" action="addsui.php" method="post">
		<p color="white">SYLLABUS ID: <input type="int" name="sid"/></p></br>
	    <p color="white">SEMESTER ID: <input  type="int" name="semid"/></p></br>
	    <p color="white">SUBJECT ID: <input  type="int" name="suid"/></p></br>
	    <p color="white">SUBJECT NAME: <input  type="varchar" name="suname"/></p></br>
		  
   </BR>
			<input type="submit" /></p>
</form>
</body>
</html>
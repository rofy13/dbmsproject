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

<form name="form1" action="addppi.php" method="post">
		<p color="white">SUBJECT ID: <input type="int" name="suid"/></p></br>
	    <p color="white">PAPER ID: <input  type="int" name="pid"/></p></br>
	    <p color="white">PAPER DATE: <input  type="varchar" name="date"/></p></br>
	    <p color="white">PAPER LINK: <input  type="varchar" name="pl"/></p></br>
		  <p text-size="10px" color="white"><?php echo "NOTE:STRICTLY STORE THE SYLLABUS COPY IN C:\Wamp64\www\dbmsproject\RC07.. OR \RC16.. IN THIS LOCATION AND THEN PROVIDE THE LINK FROM PP ONWARDS.ALSO STRICTLY USE BACKSLASHES(/) IN THE SYLLABUS LINK.REPLACE ALL FRONTSLASHS(\) IN THE SYLLABUS LINK WITH  BACKSLASHES(/). "?></p></br>
   </BR>
			<input type="submit" /></p>
</form>
</body>
</html>
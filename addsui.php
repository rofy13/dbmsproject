<?php
error_reporting(E_ERROR|E_PARSE)
?>
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

<?php
    $sid=$_POST['sid'];
	$semid =$_POST['semid'];
	$suid=$_POST['suid'];
		$suname=$_POST['suname'];
	
        if($sid && $semid && $suid && $suname)
		{ mysql_connect("localhost","root","") or die("we couldnt connect");
	       mysql_select_db("dbmsproj");
            $result=mysql_query("INSERT INTO subject(SyllabusID,SemID,SubjectID,SubjectName) values('$sid','$semid','$suid','$suname')");
			
          ?>  <p color="white"><?php echo "SUBJECT SUCCESSFULLY ADDED TO THE DATABASE";
		}
		else
		{?>
			<p color="white"><?php echo  "ALL FIELDS NEED TO BE FILLED ";
		}
			?>

</body>
</html>
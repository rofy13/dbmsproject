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
   
	$semid =$_POST['semid'];
	$semname=$_POST['semname'];
	$syid=$_POST['syid'];
		$syl=$_POST['syl'];
	
        if($semid && $semname && $syid && $syl)
		{ mysql_connect("localhost","root","") or die("we couldnt connect");
	       mysql_select_db("dbmsproj");
            $result=mysql_query("INSERT INTO semester(SemID,SemesterName,SyllabusID,Semlink) values('$semid','$semname','$syid','$syl')");
			
          ?>  <p color="white"><?php echo "SYLABUS LINK SUCCESSFULLY ADDED TO THE DATABASE";
		}
		else
		{?>
			<p color="white"><?php echo  "ALL FIELDS NEED TO BE FILLED ";
		}
			?>

</body>
</html>
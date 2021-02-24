<?php
error_reporting(E_ERROR|E_PARSE)
?>
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
<html>

<head>
</head>
<body>

<?php
    //$subid=$_POST['subid'];
	$subname =$_POST['subname'];
		
        if($subname)
		{ mysql_connect("localhost","root","") or die("we couldnt connect");
	       mysql_select_db("dbmsproj");
            $result=mysql_query("INSERT INTO subject(SyllabusID,SemID,SubjectName) values('$batch2','$sems','$subname')");
			
          ?>  <p color="white"><?php echo "SUBJECT SUCCESSFULLY ADDED TO THE DATABASE";
		}
		else
		{?>
			<p color="white"><?php echo  "ALL FIELDS NEED TO BE FILLED ";
		}
			?>

</body>
</html>
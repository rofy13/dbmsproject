<?php
error_reporting(E_ERROR|E_PARSE)
?>
<html>
<head>
</head>
<body>
<?php
    //$sid=$_POST['sid'];
	$name =$_POST['sname'];
	
        if($name)
		{ mysql_connect("localhost","root","") or die("we couldnt connect");
	       mysql_select_db("dbmsproj");
            $result=mysql_query("INSERT INTO syllabus(SyllabusName) values('$name')");
			
          ?>  <p color="white"><?php echo "NEW BATCH SUCCESSFULLY ADDED TO THE DATABASE";
		}
		else
		{?>
			<p color="white"><?php echo  "ALL FIELDS NEED TO BE FILLED ";
		}
			?>
</body>
</html>
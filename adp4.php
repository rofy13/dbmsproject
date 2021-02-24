<?php
error_reporting(E_ERROR|E_PARSE)
?>
<?php
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
?>
<?php
	//exploading the batch values
	list($subject_SubjectID,$subject_SubjectName)=explode("-",$_POST['subject'],2);
	$subid=$subject_SubjectID;
	$subjectname=$subject_SubjectName; //simply used has no function
	

?>
<html>

<head>
</head>
<body>

<?php
	$date =$_POST['date'];
	$year=$_POST['year'];
	$file=$_FILES['file']['name'];
	$file_loc = $_FILES['file']['tmp_name'];       //fileclocation
	$file_size = $_FILES['file']['size'];			//filesize
	$file_type = $_FILES['file']['type'];			//filetype
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	
	if(move_uploaded_file($file_loc,$folder.$final_file)){
		mysql_connect("localhost","root","") or die("we couldnt connect");
	       mysql_select_db("dbmsproj");
            $result=mysql_query("INSERT INTO paper(SubjectID,Date,Dlink) values('$subid','$date $year','uploads/$final_file')");
			
          ?>  <p color="white"><?php echo "Paper SUCCESSFULLY ADDED TO THE DATABASE";
		}
		else
		{?>
			<p color="white"><?php echo  "ALL FIELDS NEED TO BE FILLED ";
		}
			?>

</body>
</html>
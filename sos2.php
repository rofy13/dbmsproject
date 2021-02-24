<?php
error_reporting(E_ERROR|E_PARSE)
?>
<?php
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
?>
 <?php
 
	//exploading the batch values
	list($batch_Syllabusid,$batch_Syllabusname)=explode("-",$_POST['batch'],2);
	echo $batchs=$batch_Syllabusid;
	$batchname=$batch_Syllabusname; //simply used has no function
	
	
?>
<html>
<head>
</head>
<body>
<?php
   // $semid=$_POST['semid']; //not required since auto increament
	echo $semname =$_POST['semname'];
	echo $file=$_FILES['file']['name'];
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
	
	echo $final_file=str_replace(' ','-',$new_file_name);
	
	
	if(move_uploaded_file($file_loc,$folder.$final_file)){
		mysql_connect("localhost","root","") or die("we couldnt connect");
	       mysql_select_db("dbmsproj");
            $result=mysql_query("INSERT INTO semester(SemesterName,SyllabusID,Semlink) values('$semname','$batchs','uploads/$final_file')");
			
          ?>  <p color="white"><?php echo "Paper SUCCESSFULLY ADDED TO THE DATABASE";
		}
		else
		{?>
			<p color="white"><?php echo  "ALL FIELDS NEED TO BE FILLED ";
		}
			?>
</body>
</html>
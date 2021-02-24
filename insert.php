<?php
error_reporting(E_ERROR|E_PARSE)
?>

<html>
  <head>
    <title>GEC-COMP|PAPER REPOSITORY</title>
	<link rel="stylesheet" href="style.css">
  </head>
 
  <body>
  <div class="ww">
        <header>
            <nav> 
               <h1> GEC-COMP|PAPER REPOSITORY</h1>
              <ul id="nav">
                 <li><a  href="home.php">HOME</a></li>
				  
                  
				  <li><a   href="view.php">VIEW</a></li>
				  <li><a  href="about.php">ABOUT US</a></li>
				   <li><a  class="active" href="login.php">ADMIN LOGIN</a></li>
				</ul>
            </nav>
	    </header>
		<div class="divider"></div>
		<div class="new1">
		   
<?php
    $sid=$_POST['sid'];
	$name =$_POST['sname'];
	$batch=$_POST['batch'];
		$sem=$_POST['sem'];
		$syl=$_POST['syl'];
        if($sid && $name && $batch && $sem && $syl)
		{ mysql_connect("localhost","root","") or die("we couldnt connect");
	       mysql_select_db("dbms_project1");
            $result=mysql_query("INSERT INTO subjects(SID,NAME,BATCH,SEMESTER,SYLLABUS) values('$sid','$name','$batch','$sem','$syl')");
			
          ?>  <p color="white"><?php echo "SUBJECT SUCCESSFULLY ADDED TO THE DATABASE";
		}
		else
		{?>
			<p color="white"><?php echo  "ALL FIELDS NEED TO BE FILLED ";
		}
			?>
     
</div>	 
  </body>
  
</html>
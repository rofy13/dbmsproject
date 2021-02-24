<?php
error_reporting(E_ERROR|E_PARSE)
?>
<?php
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
?>
<html>
  <head>
	<link rel="stylesheet" href="style.css">
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
		
	<div class="container1">
	<?php $username=$_POST['uname'];
	      $password=$_POST['pass'];
	
	if($username && $password)
		
	{   mysql_connect("localhost","root","") or die("we couldnt connect");
	       mysql_select_db("dbmsproj");
            $result=mysql_query("SELECT USERNAME,PASSWORD from login");
			while($row=mysql_fetch_array($result))			
			{  ?>
				
				 <?php  $uname=$row['USERNAME'];
				         $pass=$row['PASSWORD'];
				 ?>
			 <?php	
			   if($username== $uname && $password==$pass )
                   {
			              session_start();
                          $_SESSION['uname']=$username;
	                      $_SESSION['pass']=$password;
		                  include("method.php");
		            }
		        else
		           { 
			        $flag=1;
		            }	
			}
			if($flag==1)
			{?>
				<p color="white"><?php echo "INVALID USERNAME OR PASSWORD" ;?></p>	
			<?php 
			}
			
			
	  
	}	
	else
   {?>
		<p color="white"><?php echo "BOTH FIELDS MUST BE FILLED PROPERLY" ;?></p>	
	<?php		   	
	}
	
	?>
	
	
	
	</div>
	</body>
	</html>
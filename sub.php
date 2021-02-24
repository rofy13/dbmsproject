<html>
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
				    <li><a  class="active"href="login.php">ADMIN LOGIN</a></li>
				</ul>
            </nav>
	    </header>
		<div class="divider"></div>
		
		
		<div class="new1">
		
			<form name="form1" action="insert.php" method="post">
		<p color="white">SUBJECT ID: <input type="int" name="sid"/></p></br>
        <p color="white">SUB NAME: <input  type="varchar" name="sname"/></p></br>
	    <p color="white">BATCH: <input  type="varchar" name="batch"/></p></br>
	    <p color="white">SEMESTER: <input  type="varchar" name="sem"/></p></br>
	    <p color="white">SYLLABUS: <input  type="varchar" name="syl"/></p></br>
		  <p text-size="10px" color="white"><?php echo "NOTE:STRICTLY STORE THE SYLLABUS COPY IN C:\  xampp \htdocs\PROJECT\pp IN THIS LOCATION AND THEN PROVIDE THE LINK FROM PP ONWARDS.ALSO STRICTLY USE BACKSLASHES(/) IN THE SYLLABUS LINK.REPLACE ALL FRONTSLASHS(\) IN THE SYLLABUS LINK WITH  BACKSLASHES(/). "?></p></br>
   </BR>
            
			
		
		
			<input type="submit" /></p>
		
			
			
			</form>
		
		
		
		
		
		
		
		</div>	 
  </body>
  
</html>
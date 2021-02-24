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
	 <form method="POST" action="verify.php">
   </br></br>

      
    <p color="white">USERNAME:</br></br><input type="text" name="uname"/></p></br></br>
    <p color="white">PASSWORD:</br></br><input  type="password" name="pass"/></p></br></br>

	
  <p>
  </br>
  <input type="submit" class="btn-login"/><br/>
  </form>
	
	
	
	
	
	
	
	</div>
	</body>
	</html>
	
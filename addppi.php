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
    $suid=$_POST['suid'];
	$pid =$_POST['pid'];
	$date=$_POST['date'];
		$pl=$_POST['pl'];

        if($suid && $pid && $date && $pl)
		{ mysql_connect("localhost","root","") or die("we couldnt connect");
	       mysql_select_db("dbmsproj");
            $result=mysql_query("INSERT INTO paper(SubjectID,PaperID,Date,Dlink) values('$suid','$pid','$date','$pl')");
			
          ?>  <p color="white"><?php echo "PAPER SUCCESSFULLY ADDED TO THE DATABASE";
		}
		else
		{?>
			<p color="white"><?php echo  "ALL FIELDS NEED TO BE FILLED ";
		}
			?>

</body>
</html>
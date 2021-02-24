<?php
include_once 'dbconfig.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>transparent navigation bart</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
	<nav>
    <img src="ICON0.png" width="200" height="80">
		<ul>
			<li class="active"><a href="#">HOME</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">EXTRA</a></li>
        </ul>
    </nav>
</div> 
<br>
<br> 
<div>

<table width="80%" border="1" id="vik">
    <tr>
    <td>SYLLABUS ID</td>
    <td>SYLLABUS NAME</td>
    </tr>
    <?php
	$sql="SELECT * FROM syllabus";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['Syllabusid'] ?></td>
        <td><?php echo $row['Syllabusname'] ?></td>
        </tr>
        <?php
	}
	?>
    </table>  
</div>	
</body>
</html>

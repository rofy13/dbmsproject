<?php

//make connection
mysql_connect('localhost','root','');

//selecting db
mysql_select_db('dbmsproject');

$sql="SELECT * FROM Syllabus";

$result=mysql_query($sql);

?>
<html>
<head>
</head>
<body>
<table width="600px" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Syllabus id</th>
<th>Syllabus name</th>
</tr>
<?php

while($row=mysql_fetch_assoc($result))
{
		echo "<tr>";
		
		echo "<td>".$row['Syllabusid']."</td>";
		echo "<td>".$row['Syllabusname']."</td>";
		
		echo "<\tr>";
}
?>
</table>
</body>
</html>
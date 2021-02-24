<?php
$connect = mysqli_connect("localhost","root","","dbmsproj");
$output='';
$sql="SELECT * FROM semester WHERE SyllabusID = ".$_POST["SyllabusID"]."";
 $result = mysqli_query($connect, $sql);
 $output = '<option value="">Select sem</option>';
 
 while($row=mysqli_fetch_array($result))
	{
			$output .= '<option value="'.$row["SemID"].'">'.$row["SemesterName"].'</option>';
	}
echo $output;
?>
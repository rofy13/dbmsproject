<?php
include_once "connection.php";

if(!empty($_POST["SyllabusID"])){
$query="SELECT * FROM semester WHERE SyllabusID=$SyllabusID";
$result=mysqli_query($con, $query);
foreach($result as $Semname)
{
	?>
<option value="<?php echo $Semname["SemID"]; ?>"><?php echo $Semname["SemesterName"]; ?></option>	
<?php
}
?>
<?php
}
?>
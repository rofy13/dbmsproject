<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>
</title>
</head>
<style type="text/css">
.batch, .semester{
	margin:	20px;
	text-align: center;
}
</style>
<body>
<div class="batch">
<label>Batch</label>
<select name="batch" onchange="getId(this.value);">
<option value="">select batch</option>
<?php 
	$query="SELECT * FROM syllabus";
	$result=mysqli_query($con, $query);
	//loop
	foreach($result as $batch){
	?>
<option value="<?php echo $batch["Syllabusid"]; ?>"><?php echo $batch["Syllabusname"]; ?></option>
<?php
	}
?>
</select>
</div>

<div class="semester">
<label>Semester</label>
<select name="semester" id="Semestername">
<option value=""></option>
</select>
</div>
<script>
	function getId(val)
	{
		$.ajax({
			type: "POST",
			url: "getdata.php",
			data: "Syllabusid="+val,
			success: function(data){
							$("#Semestername").html(data);
						 }
		})
	}
</script>
</body>
</html>
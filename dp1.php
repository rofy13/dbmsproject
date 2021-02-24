<?php
function load_syllabus()
{
	$connect = mysqli_connect("localhost","root","","dbmsproj");
	$output='';
	$sql="SELECT * FROM syllabus";
	$result = mysqli_query($connect,$sql);

	while($row=mysqli_fetch_array($result))
	{
			$output .= '<option value="'.$row["SyllabusID"].'">'.$row["SyllabusName"].'</option>';
	}
}
?>
<html>
<head>
<title>
kk
</title>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
<p>SELECT Syllabus
<select name="batch" id="batch">
<option value="">SELECT BATCH</option>
<?php echo load_syllabus(); ?>
</select></p>

<p>Select Semseter
<select name="semb" id="semb">
<option value="">Select sem</option>
</select></p>

<script>
$(document).ready(function(){
	$('#batch').change(function(){
	var SyllabusID = $(this).val();
		$.ajax({
			url:"pleaseget.php",
			method:"POST",
			data:{Syllabus_ID:SyllabusID},
			dataType:"text",
			success:function(data)
			{
				$('#semb').html(data);
			}
	});
});
</script>

</body>
</html>
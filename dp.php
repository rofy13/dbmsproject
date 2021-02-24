<?php include_once 'connection.php' ?>
<html>
<head>
</head>
<body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
function getId(val)
{
$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "process-request.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
    });
});
}
</script>
<form method="POST">
Batch:<select name="batch" class="country"">
<?php 
	$query="SELECT * FROM syllabus";
	$result=mysqli_query($con, $query);
	//loop
	foreach($result as $batch){
	?>
<option value="<?php echo $batch['SyllabusID']; ?>"><?php echo $batch['SyllabusID']; ?></option>
<?php
	}
?>
</select>
<br>
Semester:<select name="sem" id="semb">
<option value=""></option>
</select>
<br>
<button formaction="2.php">syllabus</button>
<br>
<button formaction="3.php">sempapers</button>
</form>

</body>
</html>
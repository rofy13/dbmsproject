<?php include_once 'dbconfig.php' ?>
 <?php
	
	
	//exploading semester values
	list($sem_SemId,$batch1)=explode("-",$_POST['sem'],2);
	$sems=$sem_SemId;
	$batch2=$batch1; //simply used has no function
?>	
<link rel="stylesheet" type="text/css" href="style.css">
 <html>
 <head>
 </head>
 <body>
 <div id="main">
	<nav>
    <img src="logo.png" width="600" height="80">
		<ul>
			<li class="active"><a href="home.php">HOME</a></li>
            <li><a href="about.php">ABOUT US</a></li>
             <li><a href="login.php">ADMIN LOGIN</a></li>
        </ul>
    </nav>
</div>
 <style>
 table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 6px;
  overflow: hidden;
  max-width: 800px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #FFED86;
  font-size: 16px;
}
table tbody tr {
  height: 48px;
  border-bottom: 1px solid #E3F1D5;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}

@media screen and (max-width: 35.5em) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 8px 0;
  }
  table tbody tr td {
    padding-left: 45%;
    margin-bottom: 12px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    position: absolute;
    font-weight: 700;
    width: 40%;
    left: 10px;
    top: 0;
  }
  table tbody tr td:nth-child(1):before {
    content: "Code";
  }
  table tbody tr td:nth-child(2):before {
    content: "Stock";
  }
  table tbody tr td:nth-child(3):before {
    content: "Cap";
  }
  table tbody tr td:nth-child(4):before {
    content: "Inch";
  }
  table tbody tr td:nth-child(5):before {
    content: "Box Type";
  }
}


 </style>
 <br>
 <br>
 <br>
 <br>
 <table width="80%" border="1" id="vik">
    <tr>
    <td>SEM ID</td>
    <td>SEMESTER NAME</td>
	<td>SYLLABUSID</td>
	<td>DOWNLOAD</td>
    </tr>
    <?php
	$sql="SELECT * FROM semester WHERE SemID=".$sems." and SyllabusID=".$batch1."";
	$result_set=mysql_query($sql);
	
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['SemID'] ?></td>
        <td><?php echo $row['SemesterName'] ?></td>
		<td><?php echo $row['SyllabusID'] ?></td>
		<td><a href="<?php echo $row['Semlink'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>  
 </body>
 </html>
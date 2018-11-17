<table border='1' align='center' width='70%' cellspacing='0'>
<tr><td>
<table border='0' align='center' width='100%' cellspacing='0'>
		<tr class ='a' align='center'>
		
			<th class='b'>Id</th>
			<th>Catalog</th>
		    <th>Delete</th>
		    <th>Update</th>
		
		</tr>
<head>
	<style>
		table{
				
				margin:auto;
				
		}
		th{
			color:white;
			font-weight:bold;
			font-size:30px;
			padding:20px;
			font-style:Algerian;
			margin:150px;
			
			
		}
		
		
		 tr.a{
			background:#ec644b;
			border-radius:50px;
			font-style:Algerian;
			
		}
		td{
			padding:20px;
			background:black;
		}
		tr.c{
				color:salmon;
				font-style:Algerian;
				font-weight:bold;
				font-size:20px;
				font-style:Algerian;
			
		}
		
		
	</style>
</head>		
<body style='background-image: url(hb.jpg); background-repeat:no-repeat; background-size:2900px 1500px;'>
<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("db");
	$sql="select * from learn";
	
	$rs=mysql_query($sql);
	
	while($row=mysql_fetch_array($rs))
	{
	
	echo "<tr align='center' class='c'>";
		echo "<td>";
			echo $row[0];
		echo "</td>";
		echo "<td>";
			echo $row[1];
		echo "</td>";
		
		echo "<td>";
			echo"<a href='catdelete.php?id=$row[0]'>Delete</td>";
		echo "</td>";
		echo "<td>";	
			echo"<a href='updatel.php?id=$row[0]'>Update</td>";
		echo "</td>";
	echo "</tr>";
	}

	
?>
</td></tr>
</table>
</body>
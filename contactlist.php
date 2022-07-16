<html>
<head>
<title>blood donation|Contact List</title>
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
<style>
table, th, td{
	margin:auto;
	margin:; 
	background-color:black;
	size:30px;
	padding:10px;
	color:white;
}
.donors{
	color:black;
	margin:50px 0px 0px 600px;
}
.vpage{
	background-color:gray;
}
</style>
</head>
<body class="vpage">
 
<a href="index.php"> <span class="home" align=right>Home</span></a>
<h1 class="donors"><b>Contact List...</b></h1>
<div>
<table>
<thead>
  <tr>
       <th>Message</th>
	   <th>Contact</th>
   </tr>	   
</thead>
<tbody>	   
<?php
$fd=$_POST['fd'];
$cd=$_POST['cd'];

include_once 'db.php';

       

$no = 1;

$query="select *from contact;";
$sql=mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($sql))
	{  
	   echo '<tr>
			    <td>'.$no.'</td>
				<td>'.$row['message'].'</td>
				<td>'.$row['ceid'].'</td>
             </tr>'	;	
   $no++;			 
}
?>
</tbody>
</table>
</div>
</body>


</html>

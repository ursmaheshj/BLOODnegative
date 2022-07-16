<html>
<head>
<title>blood donation|Contact List</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
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
<table class="table">
<thead>
  <tr>
       <th scope="col">Message</th>
	   <th scope="col">Contact</th>
   </tr>	   
</thead>
<tbody>	   
<?php

include_once 'db.php';

$query="select *from contact;";
$sql=mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($sql))
	{  
	   echo '<tr>
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

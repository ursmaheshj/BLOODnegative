<html>
<head>
<title>blood donation|Contact List</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
 
<a href="index.php"> <span class="home" align=right>Home</span></a>
<h1 class="donors"><b>Contact List...</b></h1>
<div class="container">
<table class="table table-success table-striped">
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
    }
?>
</tbody>
</table>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>

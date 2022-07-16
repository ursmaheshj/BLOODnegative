<?php
	require('db.php');
    // If form submitted, insert values into the database.
     
		$fname=$_POST['fname'];
		
		$lname=$_POST['lname'];
		
		$bloodgr=$_POST['bloodgr'];
		
		$pincode =$_POST['pincode'];
	
		$mbno=$_POST['mbno'];

		$email=$_POST['eid'];

		if (isset($fname,$lname,$bloodgr,$pincode,$mbno)) {
			# code...
			$sql = "INSERT into `volunteer` (fname, lname, bloodgr, pincode, mbno, eid) VALUES('$fname', '$lname', '$bloodgr', '$pincode', '$mbno', '$email')";
		}

        
      $resultCheck=mysqli_query($conn,$sql);
	
	  mysqli_close($conn);
	  ?>  
		
		<html>
		<head><title>Registerform | success</title>
		<link rel="stylesheet" href="styles.css">
		<style>
		.re{
			margin:50px 0px 0px 350px;
		}
		.homer{
	      color:yellow;
	      margin:50px 0px 0px 700px;
       	  background-color:rgb(500,30,400);
	      padding: 10px 15px 10px 15px;
		  decoration:none;
	      font-size:30px;
	      box-sizing:border-box;
	      border-radius:20px;
	      transition: 0.5s;
               }
          .homer:hover{
	          transform: scale(1.1);
                      }
		</style>
		</head>
		<body>
		<h1 class="re">YOU HAVE REGISTERED SUCCESSFULLY !</h1><br>
		<a href="index.php"> <span class="homer" align=right>Home</span></a>
		</body>
		</html>

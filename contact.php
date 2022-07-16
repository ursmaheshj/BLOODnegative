<html>
<head>
<title>blood donation|contact us</title>
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    
		$message=$_POST['message'];
		
		$ceid=$_POST['ceid'];
		

        $query = "INSERT into `contact` (message, ceid) VALUES('$message', '$ceid')";              
        $result = mysqli_query($conn,$query);
        
		
?>
   <header>
      <nav>
	    <h1>BLOOD negative</h1>
		<ul id="nav">
		   <li><a class="st" href="index.php">HOME</a></li>
		   <li><a class="st" href="about.php">ABOUT US</a></li>
		   <li><a class="st" href="gallery.php">GALLERY</a></li>
		   <li><a class="active" href="#">CONTACT</a></li>
		</ul>
	  </nav>
   </header>
   <div class="divider"></div>
   <div class="contactimg"> <br><br>
        <span class="contact">
		<b><u>CONTACT US</u></b>
		<form action="contact.php" method="post">
		<textarea class="form3" placeholder="Message/Report/Feedback" name="message" required></textarea><br>
		<input class="form3" type="email" name="ceid" placeholder="example@gmail.com" required><br>
		<input onclick="success();" class="form2" type="submit" value="submit" name="submit"><br>
		</form> 
		</span>  <br><br>
		
		<a class="con" href="registerform.php">Become a blood donor.</a>
	    <a class="con" href="searchdonor.php">Search for donor.</a>
		
	</div>
<div class="divider"></div>
<footer>
copyrights &copy reserved by BLOODnegative since 2019.<br>
<u>support@bloodnegative.com</u>
</footer>
</body>


</html>

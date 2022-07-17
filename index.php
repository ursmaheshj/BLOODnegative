<html>
<head>
<title>blood donation| home</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
   <header>
      <nav>
	    <h1>BLOOD negative</h1>
		<ul id="nav">
		   <li><a class="active" href="#">HOME</a></li>
		   <li><a class="st" href="about.php">ABOUT US</a></li>
		   <li><a class="st" href="gallery.php">GALLERY</a></li>
		   <li><a class="st" href="contact.php">CONTACT</a></li>
		</ul>
	  </nav>
   </header>
   
   <div class="divider"></div>
<div class="homeimg"><br><br>
            <div class="searchform">
                     <h2 class="formhead" align=center>Search your Donor...</h2>
               <form action="vpage.php" method="post">
	           First Name:<input class="form1" type="text" maxlength="12" onkeyup="lettersOnly(this)" required>
               Blood Group:<select class="form1" name="fd" required>
	                    <option value="">Select</option>
                        <option value="A+">A+ positive</option>
                        <option value="A-">A- negative</option>
					    <option value="B+">B+ positive</option>
						<option value="B-">B- negative</option>
                        <option value="O+">O+ positive</option>
                        <option value="O-">O- negative</option>
                        <option value="AB+">AB+ positive</option>
                        <option value="AB-">AB- negative</option>
                            </select>
	            PIN code:<input class="form1" name="cd" type="text" maxlength="6" onkeyup="digitOnly(this)" required>
	            <input onclick="" class="form2" type="submit" value="submit">
                </form>
				<button class="form4" type="button" ><a href="registerform.php"> BE A DONOR</a></button> 
            </div>
        <span class="mar">
		   <h2 class="formhead" align="center"><b>~NEWS & ACTIVITIES~</b></h2>
           <marquee direction="up" >
		    <ol>
			   <li>Upcoming blood donation camps :
			     <ul>
				   <li>JAIPUR : 12 sep 2019.</li>
				   <li>NANDED : 20 sep 2019.</li>
				   <li>BHOPAL : 24 sep 2019.</li>
				   <li>MUMBAI : 28 sep 2019.</li>
				   <li>NAGPUR : 02 oct 2019.</li>
				 </ul>
			   
			   </li><br>
			   <li>All volunteers are here by informed that they are 
			   invited for the certificate distribution ceremony:- <br>
			   Venue : Narmada function hall, Bangalore.<br>
			   Date : 02-oct-2019.<br>
               Time : 3pm-5pm.
               			   
			   </li><br>
			   <li>Blood donation rallies :<br>
			    <ul>
				   <li>PUNE:<br>
				    Date: 26 sep 2019.
				   </li>
				   <li>DELHI:<br>
				   Date: 30 sep 2019.
				   </li>
				   <li>CHENNAI:<br>
				   Date: 04 oct 2019.
				   </li>
			   
			    </ul>   
			    </li>
			</ol>   
		   </marquee>
	    </span>
		  
</div>          

</body>
</html>

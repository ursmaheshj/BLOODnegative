<html>
<head>
<title>blood donation|registration form</title>
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
</head>
<body class="regis">

<span class="webhead" align=center><b>BLOOD negative</b></span>
<a href="index.php"> <span class="home" align=right>Home</span></a>
<div class="wrap">
    <h2 class="formhead" align=center>Register here...</h2>
    <form action="insert.php" method="post">
	First Name:<input class="form1" name="fname" type="text" maxlength="12" onkeyup="lettersOnly(this)" required>
	Last Name:<input class="form1" type="text" name="lname" maxlength="12" onkeyup="lettersOnly(this)" required>
    Blood Group:<select class="form1" name="bloodgr" required>
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
	
	PIN code:<input class="form1" type="text" name="pincode" maxlength="6" onkeyup="digitOnly(this)" required>
	Email ID:<input class="form1" name="eid" type="email" required>
	USERNAME / Mobile NO:<input class="form1" type="text" name="mbno" onkeyup="digitOnly(this)" maxlength="10"  required>
	<button class="form2" type="submit" name="submit">Submit</button>
    </form>
</div>

</body>

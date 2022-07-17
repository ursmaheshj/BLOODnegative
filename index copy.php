<?php include 'header.php' ?>
<div class="bg-image img-fluid" 
     style="background-image: url('image/bloodcell.jpg');
     height: 100vh">
<div class='container'>
	
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
  <div class="row justify-content-evenly">
    <div class="col-4">
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
    </div>
    <div class="col-4">

    <form class="row g-3" action="vpage.php" method="post">
    <div class="col-12">
        <label for="bloodgr" class="form-label">Blood Group</label>
        <select id="bloodgr" class="form-select">
        <option value="" selected>Choose...</option>
            <option value="A+">A+ positive</option>
            <option value="A-">A- negative</option>
            <option value="B+">B+ positive</option>
            <option value="B-">B- negative</option>
            <option value="O+">O+ positive</option>
            <option value="O-">O- negative</option>
            <option value="AB+">AB+ positive</option>
            <option value="AB-">AB- negative</option>
        </select>
    </div>
    <div class="col-12">
        <label for="pincode" class="form-label">PIN Code</label>
        <input type="text" class="form-control" id="pincode" placeholder="PIN Code">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>

    </div>
  </div>
</div>

</div>
<?php include 'footer.php' ?>
</div>

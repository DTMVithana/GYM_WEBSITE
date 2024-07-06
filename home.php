<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="C:\xampp\htdocs\IWT1\profile-system\tAccountscript.js"></script>
</head>
<body>
         <!--bigining of the navigator bar-->
<nav> 
          <div class="logo">
          <img src="images\logo.jpg">
      
      </div>
    
           <ul>
            <li><a href="https://courseweb.sliit.lk/">Home </a></li>
            <li><a href="https://courseweb.sliit.lk/">Services </a></li>
            <li><a href="https://courseweb.sliit.lk/">Pricing</a></li>
            <li><a href="https://courseweb.sliit.lk/">Registration</a></li>
            <li><a href="https://courseweb.sliit.lk/">Resources</a></li>
            <li><a href="https://courseweb.sliit.lk/">contact</a></li>
            <li><a href="https://courseweb.sliit.lk/">Testmonials</a></li>
            <li><a href="https://courseweb.sliit.lk/">Log in</a></li>
          </ul>
</nav> 

  <!--bigining of the frist image-->  
<div class="firstcontainer">
  <img src="images\trainer.jpg" style="width: 50%">
  <div class="firstcontent">
    <h1>Welcome to the Trainer Account</h1>
    <p>Starting your online fitness coaching is easier than you think. Your business can be up and running and accepting monthly payments in less than a day.</p>
    <button type="buton" class="btn"><a href="https://courseweb.sliit.lk/">see more</a></button>
  </div>

  <!--bigining of the trainer profile-->
  <div class="procard">
    <img src="images\profile.jpg" alt="John" style="width:100%">
    <h1>John Doe</h1>
    <p class="title">Personal trainer, Example vhjbjbjbjbjb hbbjbjh <br>bgggg fvyf</p>
    <p ><button class="cobttn">Contact</button></p>
  </div>
</div>




     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
  <div class="changepw">
     <button>	<a href="change-password.php">Change Password</a></button>
     <button> <a href="logout.php">Logout</a></button>
</div>

   <!--bigining of the trainer services-->
<div class="bttncon">

<button class="btt" type="button" id="b1" onclick="loadData('b1')">Private Training</button>
<button class="btt" type="button" id="b2" onclick="loadData('b2')">Fitness reports</button>
<button class="btt" type="button" id="b3" onclick="loadData('b3')">Meeting and lectures</button>
<button class="btt" type="button" id="b4" onclick="loadData('b4')">Fitness plans</button>
<button class="btt" type="button" id="b5" onclick="loadData('b5')">Meal plans</button>
<button class="btt" type="button" id="b6" onclick="loadData('b6')">My other services</button>
</div>


<img id="img1" src="images\profile.jpg" style="width: 50% ">
<p class="txt" id="pa" style="width: 50%" >Click above bottones to see more details. Why is resistance training what you should 
be prioritizing?  Lifting weights is the best way to build muscle, get stronger, and shape your body.  Want to move better, improve 
your posture, and be ready to take on all life throws at you?  Prioritize strength training.</p>

<!--bigining of the dropdown-box-->

<div class="dropcontent">
  <button class="dropbttn">Manage your upload items</button>
  <div class="drop-cont">
    <a href="#">schedules</a>
    <a href="#">videos</a>
    <a href="#">blogs</a>
  </div>
</div>


</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
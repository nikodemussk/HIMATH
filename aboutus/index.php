<html>
<head>
<title>About Us</title>

<link rel="icon" href="../image/favicon.png" sizes="16x16">
<link rel="apple-touch-icon" href="../image/favicon.png">

<link href="../css/style.css" type="text/css" rel="stylesheet">
<link href="../css/sidebar.css" type="text/css" rel="stylesheet">
<link href="../css/aboutus.css" type="text/css" rel="stylesheet">
</head>
<body>
    

<div id="sidebar">
<?php require '../sidebar.php'; ?>
</div>


 <div id="main">
 <!-- ☰ -->
  <span style="font-size:30px; cursor:pointer; position:fixed;" onclick="openNav()">&#9776;</span>
 
 <!-- Mr Fajar -->
 <div class="block">
 <center>
 <img src="../image/fajar.png" class="image">
 <p class="name"> Fajar Adinugraha </p>
 </center> 
 </div>
 
  <!-- Bryan -->
 <div class="block">
 <center>
 <img src="../image/bryan.png" class="image">
 <p class="name"> Bryan Soebagio </p>
  <p class="quotes">
  "I do what I can do <br>
  I learn what I can't do"
  </p>
 </center> 
 </div>
 
 <!-- Niko -->
  <div class="block">
 <center>
 <img src="../image/niko.png" class="image">
 <p class="name"> Nikodemus Stanley </p>
 <p class="quotes">
 "It always seems impossible <br>
 until it's done"</p>
 </center> 
 </div>
 </div>
 
 <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>
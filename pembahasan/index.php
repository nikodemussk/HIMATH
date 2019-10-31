<html>
<head>
<title>Answer Key</title>

<link rel="icon" href="../image/favicon.png" sizes="16x16">
<link rel="apple-touch-icon" href="../image/favicon.png">

<!-- ·BACKGROUND· -->
<!--
<link rel="stylesheet" type="text/css" href="../css/background-1.css" />
<link rel="stylesheet" type="text/css" href="../css/background.css" />
-->

<link href="../css/style.css" type="text/css" rel="stylesheet">
<link href="../css/sidebar.css" type="text/css" rel="stylesheet">


<script type="text/javascript" src="js/background.js"></script>

</head>
<body style="background-image:url(http://himath.ml/image/5.jpg);">
 
 
 <?php
 $t1 = "Test 1";
 $t2 = "Test 2";
 $t3 = "Test 3";
 $t4 = "Test 4";
 $t5 = "Test 5";
 $w1 = "Worksheet 1";
 $w2 = "Worksheet 2";
 $w3 = "Worksheet 3";
 $w4 = "Worksheet 4";
 $w5 = "Worksheet 5";
 $w6 = "Worksheet 6";
 ?>  
 
 <?php
 $linkt1 = "test/Test 1.pdf";
 $linkt2 = "test/Test 2.pdf";
 $linkt3 = "test/Test 3.pdf";
 $linkt4 = "test/Test 4.pdf";
 $linkt5 = "test/Test 5.pdf";
 $linkw1 = "worksheet/Worksheet 1.pdf";
 $linkw2 = "worksheet/Worksheet 2.pdf";
 $linkw3 = "worksheet/Worksheet 3.pdf";
 $linkw4 = "worksheet/Worksheet 4.pdf";
 $linkw5 = "worksheet/Worksheet 5.pdf";
 $linkw6 = "worksheet/Worksheet 6.pdf";
 ?>

<div id="sidebar">
<?php require '../sidebar.php'; ?>
</div>


 <div id="main">
<!--
 <ul class="cb-slideshow">
            <li>
            <span>Image 01</span>
            <div>
            <h3><?php echo "borobudur" ?></h3>
            </div>
            </li>
            
            <li>
            <span>Image 02</span>
            <div>
            <h3><?php echo "monas" ?></h3>
            </div>
            </li>
            
            <li>
            <span>Image 03</span>
            <div>
            <h3><?php echo "gili" ?></h3>
            </div>
            </li>
            
            <li>
            <span>Image 04</span>
            <div>
            <h3>Uluwatu</h3>
            </div>
            </li>
            
            <li>
            <span>Image 05</span>
            <div>
            <h3>Ampera</h3>
            </div>
            </li>
            
            <li>
            <span>Image 06</span>
            <div>
            <h3>Komodo</h3>
            </div>
            </li>
        </ul>
        
       -->
 <div id="sidebar" style="top:0px; margin-left: -20px; width: 20%;">
<div align="center" class="inside-sidebar">
 
 <!-- ☰ -->
  <span style="font-size:30px; cursor:pointer; position:fixed; left: 9px; top: 3px;" onclick="openNav()">&#9776;</span>

<img src="../image/opsi.png" class="opsi">
<div class="navbar">
<ul style="padding: 0; list-style-type: none;">

<a href="<?php echo $linkt1 ?>">
<li><?php echo $t1 ?></li>
</a>

<a href="<?php echo $linkt2 ?>">
<li><?php echo $t2?></li>
</a>

<a href="<?php echo $linkt3 ?>">
<li><?php echo $t3?></li>
</a>

<a href="<?php echo $linkt4 ?>">
<li><?php echo $t4?></li>
</a>

<a href="<?php echo $linkt5 ?>">
<li><?php echo $t5?></li>
</a>

<a href="<?php echo $linkw1 ?>">
<li><?php echo $w1?></li>
</a>

<a href="<?php echo $linkw2 ?>">
<li><?php echo $w2?></li>
</a>

<a href="<?php echo $linkw3 ?>">
<li><?php echo $w3?></li>
</a>

<a href="<?php echo $linkw4 ?>">
<li><?php echo $w4?></li>
</a>

<a href="<?php echo $linkw5 ?>">
<li><?php echo $w5?></li>
</a>

<a href="<?php echo $linkw6 ?>">
<li><?php echo $w6?></li>
</a>
</ul>

<center>
<iframe src="http://free.timeanddate.com/clock/i57gakv8/n108/tlid38/fcfff/tct/pct/th1" frameborder="0" width="57" height="18" allowTransparency="true" id="clock"></iframe>
</center>

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
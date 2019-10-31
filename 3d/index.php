<html>
<head>
<title>3D Geometry</title>

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
<body style="background-image:url(http://himath.ml/image/4.jpg);">
 
 
 <?php
 $cube = "Cube";
 $rectangular = "Rectangular";
 $sphere = "Sphere";
 $cone = "Cone";
 $quadrilateral = "Quadrilateral Pyramid";
 $triangular = "Triangular Pyramid";
 $octahedron = "Octahedron";
 $octagonal = "Octagonal Prism";
 $triangular1 = "Triangular Prism";
 $tube = "Tube";
 $sketchup = "SketchUp";
 ?>  
 
 <?php
 $linkcube = "model/cube";
 $linkrectangular = "model/rectangular";
 $linksphere = "model/sphere";
 $linkcone = "model/kerucut.skp";
 $linkquadrilateral = "model/limas segiempat.skp";
 $linktriangluar = "model/limas segitiga.skp";
 $linkoctahedron = "model/oktahedron.skp";
 $linkoctagonal = "model/prisma segilapan.skp";
 $linktriangular1 = "model/prisma segitiga.skp";
 $linktube = "model/tabung.skp";
 $linksketchup = "http://www.sketchup.com/download";
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

<a href="<?php echo $linkcube ?>">
<li><?php echo $cube ?></li>
</a>

<a href="<?php echo $linkrectangular ?>">
<li><?php echo $rectangular?></li>
</a>

<a href="<?php echo $linksphere ?>">
<li><?php echo $sphere?></li>
</a>

<a href="<?php echo $linkcone ?>">
<li><?php echo $cone?></li>
</a>

<a href="<?php echo $linkquadrilateral ?>">
<li><?php echo $quadrilateral?></li>
</a>

<a href="<?php echo $linktriangular ?>">
<li><?php echo $triangular?></li>
</a>

<a href="<?php echo $linkoctahedron ?>">
<li><?php echo $octahedron?></li>
</a>

<a href="<?php echo $linkoctagonal ?>">
<li><?php echo $octagonal?></li>
</a>

<a href="<?php echo $linktriangular1 ?>">
<li><?php echo $triangular1?></li>
</a>

<a href="<?php echo $linktube ?>">
<li><?php echo $tube?></li>
</a>

<a href="<?php echo $linksketchup ?>">
<li><?php echo $sketchup?></li>
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
<html>
<head>
<title>Soal Ethnomatika</title>

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
<body style="background-image:url(http://himath.ml/image/2.jpg);">
<?php 
$s1 = "Soal 1";
$links1 = "https://www.onlinequizcreator.com/ethnomatika/quiz-190091";

$s2 = "Soal 2";
$links2 = "https://www.onlinequizcreator.com/ethnomatika-2/quiz-190096";
?>
 
<div id="sidebar">
<?php require '../sidebar.php'; ?>
</div>


 <div id="main">



 <div id="sidebar" style="top:0px; margin-left: -20px; width: 20%;">
<div align="center" class="inside-sidebar">
 
 <!-- ☰ -->
  <span style="font-size:30px; cursor:pointer; position:fixed; left: 9px; top: 3px;" onclick="openNav()">&#9776;</span>

<img src="../image/opsi.png" class="opsi">
<div class="navbar">
<ul style="padding: 0; list-style-type: none;">

<a href="<?php echo $links1 ?>">
<li><?php echo $s1 ?></li>
</a>

<a href="<?php echo $linkts2 ?>">
<li><?php echo $s2?></li>
</a>

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
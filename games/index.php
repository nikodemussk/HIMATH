<!doctype html>
<html>
<head>
<title>Games</title>

<link rel="icon" href="../image/favicon.png" sizes="16x16">
<link rel="apple-touch-icon" href="../image/favicon.png">

<link href="../css/style.css" type="text/css" rel="stylesheet">
<link href="../css/sidebar.css" type="text/css" rel="stylesheet">
<link href="../css/games.css" type="text/css" rel="stylesheet">
</head>
<body>
    
<div id="sidebar">
<?php require '../sidebar.php'; ?>
</div>

<!-- ☰ -->
 <div id="main">
 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<object data="games.swf" id="games"></object>
 </div>

<!-- Games --> 

<!-- Sidebar -->
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

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculator</title>

<link href="../css/style.css" type="text/css" rel="stylesheet">
<link href="../css/sidebar.css" type="text/css" rel="stylesheet">
</head>

<body>

<div id="sidebar">
<?php require '../sidebar.php'; ?>
</div>


<!-- ☰ -->
 <div id="main">
 <span style="font-size:30px;cursor:pointer; position: absolute; margin-left: 2%; margin-top: 9px;" onclick="openNav()">&#9776;</span>
<div style="max-height:100%; max-width:100%;">
<iframe width="100%" style="max-height:100%; height:65pc;" src="http://web2.0calc.com/widgets/horizontal/?options=%7B%22angular%22%3A%22deg%22%2C%22options%22%3A%22hide%22%2C%22menu%22%3A%22show%22%7D" scrolling="no" style="border: 1px solid silver; "> 
</iframe>
</div>
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
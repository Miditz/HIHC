<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hamilton Inline Hockey Club</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/fh-3.1.2/r-2.1.0/datatables.min.css"/>
 <!-- Latest compiled and minified CSS -->

<style>
table, tr, th, td{
    padding:5px;
    border-style:solid;
    border-width:1px;
    border-color:black;
    border-radius:5px;
    color:black;

}
    
    table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: default;
}

#table{
    color:black;
}
</style>

<!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83052229-3', 'auto');
  ga('send', 'pageview');

function showTable(str) {
	console.log(str);
    if (str == "") {
        document.getElementById("standing").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("standing").innerHTML = this.responseText;
                console.log(this.responseText);
            }
        };
        
        xmlhttp.open("GET","standings.php?grade="+str,true);
        xmlhttp.send();

    }

}

</script>
</head>
<body>
<div id="wrapper">

	<!-- start hr -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                
                <div class="navbar-collapse collapse ">
                    <div width="400px" style="float:left; display:inline-block;">
                   <a class="navbar-brand" href="index.php"><img src="img/logo-devils.png" height="85px" ></a>
                </div>
                <ul class="nav navbar-nav">
						<li ><a href="index.php">Home</a></li>
                       <li class="dropdown">
	          				<a href="statistics.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Statistics<span class="caret"></span></a>
	          				<ul class="dropdown-menu">
					            <!--<li><a href="players.php">Players</a></li>-->
					            <li><a href="primary.php">Primary/Intermediate School Leauge</a></li>
					            <li><a href="secondary.php">Secondary School Leauge</a></li>
	        				 </ul>
        				</li>
                        <li class="dropdown">
                        <a href="events.php" class="dropdown-togge" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Events/Activities<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="disco.php">Skate Night</a></li>
                                <li><a href="learn.php">Learn 2 Skate</a></li>
                                <li><a href="camp.php">Hockey Camps</a></li>
                                <li><a href="league.php">Sunday Summer League</a></li>
                                <li><a href="private.php">Private Bookings</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="becomeAMember.php">Become A Member</a></li>
                   </ul>
                </div>
            </div>
        </div>
	</hr>
	<!-- end hr -->
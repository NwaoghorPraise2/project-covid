<?php

        include "includes/config.php";?>
<html>
<head>
<title>COVID_19 COUNTER</title>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type" />
<meta name="viewport" content="width=100% height =100%,initial-scale=0.7,maximum-scale=1.0,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="shortcut icon" href="images/logo.ico" />
<style>
body {background:  url("images/background.png");
      background-repeat:no-repeat;
      background-size:160%;
      color: ;
      font-size: 12px;
      font-family: Cambria;
      margin: 0;
      padding: 0;
      text-align: center;} /* Needed to center layout in old IE browsers. */
	  
	  /* Media Queries: Tablet Landscape */
@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}

/* Media Queries: Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}

 #leftbox { 
                float:left;  
                background:lightblue; 
                width:50%; 
                height:130px;
				
                			
            } 
             
            #rightbox{ 
                float:right; 
                background:cyan; 
                width:50%; 
                height:130px;
                				
            } 
            h1{ 
                color:green; 
                text-align:center; 
            } 
			

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  height: 400px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
table {
border-collapse: collapse;
width: 99.8%;
color: #588c7e;
margin: 1px;
font-family: Arial, "Trebuchet MS", Helvetica;
font-size: 14px;
text-align: center;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: lightgreen;}
</style>
</head>
<body>
<hr>
<center>
  <div style ="height:100px; width:80%; background:lightblue;">
   <button style ="background:lightgreen; text-decoration:none;"> <a href="index.php" style ="background:lightgreen; text-decoration:none;">Home</a></button>
 <button style ="background:lightgreen; text-decoration:none;"> <a href="login.php" style ="background:lightgreen; text-decoration:none;">Login As a data entry official</a></button>
 
  </div>
</center>
<section>
<div style ="height:450px; width:100%;">
<center>
<table align ="center" style ="width:80%;">
<tr>
<th>Id</th>
<th>State</th>
<th>Confirmed</th>
<th>Recovered</th>
<th>Deceased</th>
</tr>
<?php

 include "includes/config.php";
		  $sql = "SELECT id, state, confirmed, recovered, deceased FROM states";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]."</td><td>". $row["state"] ."</td><td>" . $row["confirmed"] . "</td><td>" . $row["recovered"] . "</td><td>" .  $row["deceased"]. "</td></tr>";
}
echo "</table>";
} else { echo ""; }
$connection->close();
?>
</center>
</div>
</section>
</body>
<footer>
<center>
  <div style ="height:100px; width:80%; background:lightblue;">
  </div>
</center>
</footer>
</html>
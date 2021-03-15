<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Datarush Service Management System</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<style>.content .postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }.content .postcontent-1 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }.content .postcontent-2 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="main">
    <div class="sheet clearfix">
<header class="header clearfix">


    <div class="shapes">


            </div>

                
                    
</header>

<div class="content-layout">
<hr color="#6699CC"></hr>
<?php 
error_reporting(E_ALL ^ E_NOTICE);
$link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("datarush",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM parcels WHERE status ='received'";
		
		  $resource=mysql_query($query,$link);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>Parcel id</b></td> <td><b>Type.</b></td><td><b>Sender Id.</b></td><td><b>Destination</b></td><td><b>Source</b></td><td><b>Time Sent</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[8]."</td></tr>";/*."</td><td>
	<a href=\"modify2.php?id=".$result[0]."\"><img border=\"0\" src=\"images/cooltext457953689.png\"/></a>
	</td></tr>";*/
	} echo "</table>";
	 ?>	
<table align="center">
<tr><td>
<p align="center"><img onclick="javascript: history.go(-1)" src="images/back.png"/></td><td><input type="button" onClick="window.print()" value="Printed Report"/></p></td></tr></table>
		 
                <div class="postcontent postcontent-1 clearfix">
<div class="content-layout">
<div class="content-layout-row">
</div>
<!--<footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved.</p>
</footer>-->

    </div>
</div>


</body></html>
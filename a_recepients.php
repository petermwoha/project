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
<nav class="nav clearfix">
    <ul class="hmenu"><li><a href="main.php" >Home</a></li><li><a href="#" class="active">Add a parcel</a></li><li><a href="r_parcel.php">Receive a parcel</a></li><li><a href="i_parcel.php" >Issue parcel</a></li><li><a href="senders.php">Senders</a></li><li><a href="recepients.php">Recepients</a>></ul> 
    </nav>
<div class="layout-wrapper clearfix">
                <div class="content-layout">
   <?php 
	 //$parcelid=$_POST['pnumber']; 
	 $id=$_POST['id'];
	 $name=$_POST['name'];
	 $mobile=$_POST['mobile'];
     
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("datarush",$link) or die ("Cannot select the database!");
	 $query="INSERT INTO recepients (idnumber, name, mobile) values('".$id."', '".$name."', '".$mobile."')";
		
		  if(!mysql_query($query,$link))
		  {die ("CHECK YOUR INPUT for  UNFILLED VALUES ,DUPLICATES IDs OR PARCEL IDs and try again!");}
		  else
		 {
		  echo "New recepient added successfully!";}
	 ?>
	 
<p align="center"><img onclick="javascript: history.go(-2)" src="images/back.png"/><!--<a href="../"><img border="0" src="images/back.png" /></a>--></p>
		 
                <div class="postcontent postcontent-1 clearfix">
<div class="content-layout">
<div class="content-layout-row">

            </div><footer class="footer clearfix">
<p>Copyright © 2014 All Rights Reserved.</p>
</footer>

    </div>
</div>


</body></html>
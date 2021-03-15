<?php
	require_once('session.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Safe Parcel Delivery Manager</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>




</style></head>
<body>
<div id="main">
    <div class="sheet clearfix">
<header class="header clearfix">


    <div class="shapes">


            </div>

                
                    
</header>
<nav class="nav clearfix">

    <ul class="hmenu">
        <li><a href="a_parcel.php">Add parcel</a></li>
        <li><a href="senders.php">View Senders</a></li>
        <li><a href="recepients.php">View Recepients</a></li>
       <li><a href="r_parcel.php">Receive parcel</a></li>
        <li><a href="issue.php" >Issue parcel</a></li>
		<li><a href="sendsms.html" >Send SMS</a></li>
        <li><a href="searching.php" >View Parcel Report</a></li>

    </ul>

    </nav>
<div class="layout-wrapper clearfix">
                <div class="content-layout"> <br>

                
                 <div align="center">

                 <?php
                  require 'conn.php';
                  $time = time();
                  $timer = date ('d M Y  H:i:s' , $time-3600);

                  if (isset ($_POST['rname']) && isset ($_POST ['rid']) && isset($_POST['pid']) && isset($_POST['sendermobile']) )
                  {
                    $rname =  $_POST['rname'];
                    $rid =  $_POST ['rid'];
                    $pid = $_POST['pid'];
                    $sendermobile = $_POST['sendermobile'];
                    
                    if (!empty ($rname) && !empty($rid) && !empty($pid) && !empty($sendermobile) )
                    {
                     
                      $query2 = "select * from issued where parcelid= '$pid'";

                      $result = mysql_query($query2);
                      if ( mysql_num_rows ($result) == 0)
                      {
                      $query = "SELECT * from parcels where receipientname= '$rname' && receipientid='$rid' && parcelid='$pid' && sendermobile='$sendermobile'";
                      
                      if (mysql_num_rows (mysql_query($query)) == 0)
                      {
                         echo 'No parcel was sent to this receipient. Check your details again';
                      }
                      else if (mysql_num_rows (mysql_query($query)) >0)
                      {

  
                            $query = "insert into issued values ('$pid','$rname','$rid','$timer')";
                            mysql_query ($query);


                         }

                      } else {echo 'This parcel has already been issued !!';}

                      } else {echo 'All fields must be filled !!';}
                    }



                 ?>



                  <form action="issue.php" method = "POST">
                  <H1 align ="center"> <u>Issue claimed Parcels</u> </h1> <br><br>
                      
                      Receipients Name <br> <input type="text" name= "rname" pattern="[A-Za-z A-Za-z]*" required placeholder="" required size="30"> <br><br>

                      Receipients National ID <br> <input type="integer" name= "rid" pattern="[0-9]*" required placeholder="" required size="30"> <br><br>
                      
                      Parcel id <br> <input type="integer" name= "pid" pattern="[0-9]*" required placeholder="" required size="30"> <br><br>

                      Sender Number <br> <input type="text" name= "sendermobile" size="30"> <br><br>

                      <input type="submit" value="ISSUE">

                       </form>
                       <a href="logout.php" ><img src="images/logout.png"/></a>
                    </div>
            </div><footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved.KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body></html>
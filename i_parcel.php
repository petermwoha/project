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

    <ul class="hmenu">
        <li><a href="a_parcel.php">Add a parcel</a></li>
        <li><a href="senders.php">Senders</a></li>
        <li><a href="r_parcel.php">Receive a parcel</a></li>
        <li><a href="recepients.php">Recepients</a></li>
        <li><a href="i_parcel.php" >Issue parcel</a></li>
        <li><a href="searching.php" >Parcel Report</a></li>
    </ul>
    </nav>
<div class="layout-wrapper clearfix">
                <div class="content-layout"> <br>

                
                 <div align="center">

                 <?php
                  require 'conn.php';
                  $time = time();
                  $timer = date ('d M Y  H:i:s' , $time-3600);

                  if (isset ($_POST['rname']) && isset ($_POST ['rid']) && isset($_POST['pid']) && isset($_POST['smail']) )
                  {
                    $rname =  $_POST['rname'];
                    $rid =  $_POST ['rid'];
                    $pid = $_POST['pid'];
                    $smail = $_POST['smail'];
                    
                    if (!empty ($rname) && !empty($rid) && !empty($pid) && !empty($smail) )
                    {
                      $query = "SELECT * from parcels where receipientname= '$rname' && receipientid='$rid' && parcelid='$pid' && sendermail='$smail'";
                      if (mysql_num_rows (mysql_query($query)) == 0)
                      {
                         echo 'No parcel was sent to this receipient. Check your details again';
                      }
                      else if (mysql_num_rows (mysql_query($query)) > 0)
                      {
                           $query = "select * from issued where parcelid='$pid'";
                           if (mysql_num_rows (mysql_query($query)) ==0)
                           {
                           $to = $smail;
                           $subject = 'Easy Coach Parcel';
                           $body = $rname .' has recieved the parcel you sent to them. Thankyou for trusting in our services.';
                           $header = 'From : Easy coach bus services.';

                           if ( mail($to , $subject, $body, $headers)  )
                           {
                           echo 'An email has been sent to '.$smail.' informing them '.$rname.' has recieved the parcel.<br><br>';
                           }
                            else
                             {
                               echo 'Email could not be sent to '.$smail.' Check your internet connection and try again<br><br>';
                             }


                            

                           } else {echo 'This parcel has already been issued';}
                         }

                      } else {echo 'All fields must be filled !!';}
                    }



                 ?>



                  <form action="issu.php" method = "POST">
                  <H1 align ="center"> <u>Issue claimed Parcels</u> </h1> <br><br>
                      
                      Receipients Name <br> <input type="text" name= "rname" size="30"> <br><br>

                      Receipients National ID <br> <input type="integer" name= "rid" size="30"> <br><br>
                      
                      Parcel id <br> <input type="integer" name= "pid" size="30"> <br><br>

                      Senders email address<br> <input type="email" name= "smail" size="30"> <br><br>

                      <input type="submit" value="issue">

                       </form>
                    </div>
            </div><footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved.KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body></html>
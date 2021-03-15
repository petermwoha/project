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
        <li><a href="a_parcel.php">Add parcel</a></li>
        <li><a href="senders.php">View Senders</a></li>
        <li><a href="recepients.php">View Recepients</a></li>
       <li><a href="r_parcel.php">Receive parcel</a></li>
        <li><a href="issue.php" >Issue parcel</a></li>

        <li><a href="searching.php" >View Parcel Report</a></li>

    </ul>

    </nav>
<div class="layout-wrapper clearfix">
                <div class="content-layout"> <br>

                
                 <div align="center">

                 <?php
                 
                 require 'conn.php';

                 if (isset ($_POST['station']) && isset ($_POST ['smail']) && isset($_POST['rmail']) )
                 {
                   $station = $_POST['station'];
                   $smail = $_POST ['smail'];
                   $rmail = $_POST['rmail'];
                   
                   if (!empty ($station) && !empty($smail) && !empty($rmail) )
                   {

                     function sendermail(){
                       
                        $station = $_POST['station'];
                        $smail = $_POST ['smail'];
                        $rmail = $_POST['rmail'];

                     $to = $smail;
                     $subject = 'Easy Coach Parcel';
                     $body = 'We hereby inform you that the parcel you sent using our services has been recieved
                                 in '.$station.'.We will inform you once the reciever has picked it. <br> 
                                 Thanks for using our services';
                     $header = 'From : Easy coach bus services.';

                     if ( mail($to , $subject, $body, $headers) )
                        {
                           echo 'An email has been sent to '.$smail.' informing them of the parcel you have recieved.<br><br>';
                           }
                            else
                             {
                               echo 'Email could not be sen to '.$smail.' Check your internet connection and try again<br><br>';
                             }
                         }

                       function receivermail(){
                         
                          $station = $_POST['station'];
                          $smail = $_POST ['smail'];
                          $rmail = $_POST['rmail'];

                     $to = $rmail;
                     $subject = 'Easy Coach Parcel';
                     $body = 'We hereby inform you that the parcel that was sent to you using our services has been recieved
                                 in '.$station.'.You can pick it anytime from now. <br>
                                 Thanks for using our services';
                     $header = 'From : Easy coach bus services.';

                     if ( mail($to , $subject, $body, $headers) )
                        {
                           echo 'An email has been sent to '.$rmail.' informing them of the parcel you have received.<br><br>';
                           }
                            else
                             {
                               echo 'Email could not be sen to '.$rmail.' Check your internet connection and try again<br><br>';
                             }
                         }
                       sendermail();
                       receivermail();

                   } else {echo 'Fill all the fields';}
                    }

                 ?>

                  <form action="sendsms.php" method="post">
                <table bgcolor="white" height="150" border="0" align="center" width="40%">
				
                <td width="50%" height="46" bgcolor="#FFFFFF"><b>Phone Number</b></td>
                <td width="50%" bgcolor="#FFFFFF"><input type="text" name="recipient" /></td>
                </tr>
                <tr>
                <td width="50%" height="46" bgcolor="#FFFFFF"><strong><b>Message</b></strong></td>
               <td bgcolor="#FFFFFF"><font size="4">
               <textarea cols="22" rows="5" name="message"></textarea>
	           </tr>
               <td height="30" bgcolor="#FFFFFF" align="center"><input type="submit" value="Send message" /></td>
	          
              </tr>
               </table>
               </form>
				  <br>
                        <a href="logout.php" ><img src="images/logout.png"/></a><br> </div>
                    </div>
            </div><footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved.KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body></html>
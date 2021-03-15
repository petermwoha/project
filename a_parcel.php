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
        <li><a href="#" class="active">Add a parcel</a></li>
        <li><a href="senders.php">Senders</a></li>
        <li><a href="r_parcel.php">Receive a parcel</a></li>
        <li><a href="recepients.php">Recepients</a></li>
        <li><a href="issue.php" >Issue parcel</a></li>
		 <li><a href="sendsms.html" >send sms</a></li>
        <li><a href="searching.php" >Parcel Report</a></li>
    </ul>
    </nav>

          <div class="layout-wrapper clearfix">
          <div class="content-layout">


<div align="center">

<?php
require 'conn.php';

$time = time();
$timer = date ('d M Y  H:i:s' , $time-3600);


if (
        isset ( $_POST ['type'] ) &&
        isset ( $_POST ['senderid'] ) &&
        isset ( $_POST ['sendername'] ) &&
        isset ( $_POST ['source'] ) &&
      
        isset ( $_POST ['sendermobile'] ) &&
        isset ( $_POST ['receipientid'] ) &&
        isset ( $_POST ['receipientname'] ) &&
        isset ( $_POST ['destination'] ) &&
        isset ( $_POST ['receipientmobile'] )

   )
   {
     $type = $_POST ['type'];

     $senderid = $_POST ['senderid'];
     $sendername = $_POST ['sendername'];
     $source = $_POST ['source'];
     $smobile = $_POST ['sendermobile'];

     $rid = $_POST ['receipientid'];
     $rname = $_POST ['receipientname'];
     $dest = $_POST ['destination'];
     $rmobile = $_POST ['receipientmobile'];

     if 
     (
              !empty ($type) &&
              !empty ($senderid) &&
              !empty ($sendername) &&
              !empty ($source) &&
              !empty ($smobile) &&
              !empty ($rid) &&
              !empty ($rname) &&
              !empty ($dest) &&
              !empty ($rmobile)
     
     )

     {

       $query = "insert into parcels values ('','$type','$senderid','$sendername','$source','$smobile','$rid','$rname','$dest','$rmobile','$timer')";
       if (mysql_query($query))
       {
        // argument only eliudpro
           echo '<script type="text/javascript">
            alert("parcel has been added Succesfully");
            window.location = "http://localhost/PARCELS%20SYSTEM/a_parcel.php";
          </script>';

       }
	   
       else {echo 'Could not enter parcel details now !!';}
     } else {echo 'Fill all the fields';}

   }
   
      
?>
           
                   

<form action="a_parcel.php" method="POST" >
<br>
<H2 align ="center"><u>ADD PARCEL DETAILS </u></h2> <br>

 Type of parcel(E.g Bag, Letter, Sack) <br> <input type="text" pattern="[A-Za-z A-Za-z]*" required placeholder="" required  name="type" size="30">  <br><br>
 
 Senders national ID <br> <input type="integer" maxlength="8" name="senderid" pattern="[0-9]*" required placeholder="" required  size="30"> <br><br>
 
 Senders name <br> <input type="text" name="sendername" pattern="[A-Za-z A-Za-z]*" required placeholder="" required size="30"> <br><br>
 
 Source town  <select name="source" >
                                  <option > No option selected</option>
                                  <option > Nairobi</option>
                                  <option > Naivasha</option>
                                  <option > Nakuru</option>
                                  <option > Kitale</option>
                                  <option > Molo</option>
                                  <option > Eldoret</option>
                                  <option > Kakamega</option>
                                  <option > Webuye</option>
                                  <option > Bungoma</option>
                                  <option > Moi Bridge</option>
                                  <option > Migori</option>
                                  <option > Narok</option>
                                  <option > Sirare</option>
                                  <option > Busia</option>
                                  <option > Bondo</option>
                                  <option > Siaya</option>
                                  <option > Mumias</option>
                                  <option > Kericho</option>
                                  <option > Kapsoit</option>
                                  <option > Malaba</option>
                                  <option > Tororo</option>
                                  <option > Kampala</option>
                             </select> <br><br>
 

 Phone number of the sender <br> <input type="integer" maxlength="10" pattern="[0-9]*" required placeholder="" required name="sendermobile" size="30"> <br><br><hr>
 
 Receipient national ID <br> <input type="integer" maxlength="8" pattern="[0-9]*" required placeholder="" required name="receipientid" size="30"> <br><br>
 
 Receipient name <br> <input type="text" name="receipientname" pattern="[A-Za-z A-Za-z]*" required placeholder="" required  size="30"> <br><br>
 
 Destination town <select name="destination" >
                                  <option > No option selected</option>
                                  <option > Nairobi</option>
                                  <option > Naivasha</option>
                                  <option > Nakuru</option>
                                  <option > Kitale</option>
                                  <option > Molo</option>
                                  <option > Eldoret</option>
                                  <option > Kakamega</option>
                                  <option > Webuye</option>
                                  <option > Bungoma</option>
                                  <option > Moi Bridge</option>
                                  <option > Migori</option>
                                  <option > Narok</option>
                                  <option > Sirare</option>
                                  <option > Busia</option>
                                  <option > Bondo</option>
                                  <option > Siaya</option>
                                  <option > Mumias</option>
                                  <option > Kericho</option>
                                  <option > Kapsoit</option>
                                  <option > Malaba</option>
                                  <option > Tororo</option>
                                  <option > Kampala</option>
                             </select> <br><br>
 
 
 Phone number of receipient <br> <input type="integer" maxlength="10" pattern="[0-9]*" required placeholder="" required name="receipientmobile" size="30"> <br><br>
 
 <input type="submit" value="Add parcel" ><br><br>
 
 </form>

</div>

                     </div>
            <footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved. KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body>
</html>
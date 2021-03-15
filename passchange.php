<?php
        session_start();
	if(!isset ($_SESSION['USERNAME']) ) {
		header("location: stationadmin.php");
		exit();
	} 
        else if(isset ($_SESSION['USERNAME']) )
         {
             $username = $_SESSION['USERNAME'];

         }
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
        <li><a href="a_parcel.php">Add a parcel</a></li>
        <li><a href="senders.php">Senders</a></li>
        <li><a href="r_parcel.php">Receive a parcel</a></li>
        <li><a href="recepients.php">Recepients</a></li>
        <li><a href="issue.php" >Issue parcel</a></li>
        <li><a href="searching.php" >Parcel Report</a></li>
    </ul>
    </nav>
<div class="layout-wrapper clearfix">
                <div class="content-layout" > <br>

                   <div align="center">
                  <?php
 require 'conn.php';
 if (isset ($_POST['idNo']) && isset ($_POST['username']) &&  isset ($_POST['password']) && isset ($_POST['Nname']) && isset ($_POST['Npassword']) && isset ($_POST['Cpassword'])  )
 {
   $idNo =  $_POST['idNo'];
   $cname = $_POST['username'];
   $cpass = $_POST['password'];
   $Nname = $_POST['Nname'];
   $Npassword = $_POST['Npassword'];
   $Cpassword = $_POST['Cpassword'];
   $hash = md5($Npassword);
   
   if (!empty ($cname) && !empty ($idNo) && !empty ($cpass) && !empty ($Nname) && !empty ($Npassword) && !empty ($Cpassword)  )
   {
      if ($Npassword == $Cpassword )
      {
       $query = "select password from administrators where idNo= '$idNo'";
       if (mysql_num_rows (mysql_query($query)) == 1)
       {
           $query = "UPDATE administrators set password='$hash',username='$Nname' where idNo = '$idNo'";
           if (mysql_query($query))
           {
              echo 'Username and Password Updated.';
           } else {echo 'Could not update now.';}
       }
       else {echo 'Check your details again.';}
      } else { echo 'Passwords do not match.'; }
   } else {echo 'Fill all spaces.';}
 }
?>
 <br>
<h3><u>Change username and password.</u> </h3><br>
<form action="passchange.php" method="POST" >

IdNo <br> <input type="integer" pattern="[0-9]*"  name="idNo"  size="30"> <br><br>

Current Username <br> <input type="text" name="username"  pattern="[A-Za-z A-Za-z]*" size="30"> <br><br>

Current password <br> <input type="password" name="password"  size="30"> <br><br>

New username <br> <input type="text" name="Nname" pattern="[A-Za-z A-Za-z]*" size="30"> <br><br>

New Password <br> <input type="password" name="Npassword"  size="30"> <br><br>

Confirm password <br> <input type="password" name="Cpassword"  size="30"> <br><br>

<input type="submit" value="change">    <br><br>

</form>


		<a href="logout.php" ><img src="images/logout.png"/></a>
                 </div>
                <div class="postcontent postcontent-1 clearfix">
<div class="content-layout">
<div class="content-layout-row">

            </div><footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved. KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body></html>
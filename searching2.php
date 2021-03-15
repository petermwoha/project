<?php
	require_once('session.php');
?>
<div align="center">

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
     
     <style type="text/css">
      a:visited{color:blue;}
     </style>

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
                <div class="content-layout">

                <div align="center">
                                                  <br>
                      <a href="searching1.php">In the station.</a>
                             <a href="searching2.php">Out of the station.</a> <br>


                    <br><H3 align ="center"><u>View Parcels sent to your station.</u></h3> <br>
                    
                    <form action="searching.php" method="POST">
                     
                     Your station :<select name="destination" >
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
                             </select>
                             
                             <input type="submit" value="View"> <br><br>

                     </form>
                     
<table border="1" width="90%">
 <tr>
  <th align="center">Parcel Id</th>
  <th align="center"> Type</th>
  <th align="center"> Sender Id</th>
  <th align="center">Sender name</th>
  <th align="center"> Reciepient Id</th>
  <th align="center"> Reciepient name</th>
  <th align="center"> Source Town</th>
  <th align="center">Date/Time sent</th>
</tr>

  <tr>
  
  <td align="center">
   <?php
   require 'conn.php';
  if (isset($_POST['destination']) && !empty ($_POST['destination']) )
  {
    $dest = $_POST['destination'];
     $query = "SELECT * FROM parcels where destination='$dest'";
     $result = mysql_query ($query);
     while ($var = mysql_fetch_row ($result) )
      {
        echo $var[0].'<br><br>';
      }
  }
   ?>
  </td>

  <td align="center">
  <?php

  if (isset($_POST['destination']) && !empty ($_POST['destination']) )
  {

     $result = mysql_query ($query);
     while ($var = mysql_fetch_row ($result) )
      {
        echo $var[1].'<br><br>';
      }
  }
   ?>
  </td>
  <td align="center">
  <?php

  if (isset($_POST['destination']) && !empty ($_POST['destination']) )
  {

     $result = mysql_query ($query);
     while ($var = mysql_fetch_row ($result) )
      {
        echo $var[2].'<br><br>';
      }
  }
   ?>
  </td>
  <td align="center">
  <?php

  if (isset($_POST['destination']) && !empty ($_POST['destination']) )
  {

     $result = mysql_query ($query);
     while ($var = mysql_fetch_row ($result) )
      {
        echo $var[3].'<br><br>';
      }
  }
   ?>
  </td>
  <td align="center">
  <?php

  if (isset($_POST['destination']) && !empty ($_POST['destination']) )
  {

     $result = mysql_query ($query);
     while ($var = mysql_fetch_row ($result) )
      {
        echo $var[7].'<br><br>';
      }
  }
   ?>
  </td>
  <td align="center">
  <?php

  if (isset($_POST['destination']) && !empty ($_POST['destination']) )
  {

     $result = mysql_query ($query);
     while ($var = mysql_fetch_row ($result) )
      {
        echo $var[8].'<br><br>';
      }
  }
   ?>
  </td>
  <td align="center">
  <?php

  if (isset($_POST['destination']) && !empty ($_POST['destination']) )
  {

     $result = mysql_query ($query);
     while ($var = mysql_fetch_row ($result) )
      {
        echo $var[4].'<br><br>';
      }
  }
   ?>
  </td>
  <td align="center">
  <?php

  if (isset($_POST['destination']) && !empty ($_POST['destination']) )
  {

     $result = mysql_query ($query);
     while ($var = mysql_fetch_row ($result) )
      {
        echo $var[12].'<br><br>';
      }
  }
   ?>
  </td>

  </tr>
</table> <br><br>

                    <div align="center"> <input type="Button" onClick="window.print()" value="Print report">    <br><br>
                     <a href="logout.php" ><img src="images/logout.png"/></a><br> </div>
                     </div>


                </div>

            </div><footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved.KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body></html>
</div>
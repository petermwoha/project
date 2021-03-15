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

                    <H2 align ="center"><u>SENDERS OF PARCELS</u></h2> <br><br>
                    
                    <?php
                    require 'conn.php';
                    $query = "SELECT * FROM parcels";
                    ?>
                    
                    <table border="1" width="90%" align="center">
                    
                    <tr>
                        <th align="center">Parcel id</th>
                        <th align="center">Name of sender</th>
                        <th align="center">ID</th>
                        <th align="center">Phone number</th>
                        <th align="center">Number</th>
                        <th align="center">Item sent</th>
                        <th align="center">Town</th>
                    <tr>
                    
                    <tr>
                        
                        <td align="center">
                         <?php
                         $result = mysql_query($query);
                         $num = mysql_num_rows($result);

                         for ($row=0; $row <= $num ; $row++)
                         {
                          while ($var = mysql_fetch_row ($result))
                                {
                                  echo $var[0].'<br><br>';
                                }
                         }
                         ?>
                       
                       </td>
                       <td align="center">
                         <?php
                         $result = mysql_query($query);

                         while ($var = mysql_fetch_row ($result))
                         {
                           echo $var[3].'<br><br>';
                         }
                         ?>
                       
                       </td>
                       

                       <td align="center">
                        <?php
                         $result = mysql_query($query);

                         while ($var = mysql_fetch_row ($result))
                         {
                           echo $var[2].'<br><br>';
                         }
                         ?>

                       </td>
                       <td align="center">
                        <?php
                         $result = mysql_query($query);

                         while ($var = mysql_fetch_row ($result))
                         {
                           echo $var[6].'<br><br>';
                         }
                         ?>

                       </td>
                       <td align="center">
                       <?php
                         $result = mysql_query($query);

                         while ($var = mysql_fetch_row ($result))
                         {
                           echo $var[5].'<br><br>';
                         }
                         ?>
                       </td>
                       <td align="center">
                       <?php
                         $result = mysql_query($query);

                         while ($var = mysql_fetch_row ($result))
                         {
                           echo $var[1].'<br><br>';
                         }
                         ?>
                       </td>
                       <td align="center">
                       <?php
                         $result = mysql_query($query);

                         while ($var = mysql_fetch_row ($result))
                         {
                           echo $var[4].'<br><br>';
                         }
                         ?>
                       </td>
                    </tr>

                    </table> <br><br>

                    <div align="center"> <input type="Button" onClick="window.print()" value="Print report">    <br><br>

                   <a href="logout.php" ><img src="images/logout.png"/></a><br> </div>
            </div>
            <footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved.KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body></html>
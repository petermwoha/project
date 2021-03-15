<?php
	require_once('managersession.php');
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
    <li><a href="viewadministrators.php">Station administrators</a></li>
    <li><a href="addadmin.php">Add an Administrator</a></li>
    <li><a href="removeadmin.php">Remove an Administrator</a></li>
    <li><a href="viewparcels.php">Sent parcels</a></li>
    <li><a href="viewissued.php">Issued parcels</a></li>
    </ul>
    </nav>

         <h2 align="center" color="black"> <u> Administrators in operation </u> </h2>     <br>
    
    <div align="center">

         <?php
           require 'conn.php';
           $query = "select * from administrators";
         ?>

           <table border="1" width="90%" >
           <tr>
               <th align="center">Number</th>
               <th align="center">Station</th>
               <th align="center">Password</th>
               <th align="center">Username</th>
               <th align="center">National ID</th>
               <th align="center">First Name</th>
               <th align="center">Last Name</th>
               <th align="center">Education Level</th>
           
           </tr>

           <tr>
               <td align="center">
                    <?php

                      $result = mysql_query ($query);

                      while( $var = mysql_fetch_row ($result))
                      { echo $var[0].'<br><br>'; }
                    ?>
              </td>

               <td align="center">
                    <?php

                     $result = mysql_query ($query);

                      while( $var = mysql_fetch_row ($result))
                      { echo $var[1].'<br><br>'; }
                    ?>
              </td>

              <td align="center">
                    <?php

                     $result = mysql_query ($query);

                      while( $var = mysql_fetch_row ($result))
                      { echo $var[2].'<br><br>'; }
                    ?>
              </td>

              <td align="center">
                    <?php

                       $result = mysql_query ($query);

                      while( $var = mysql_fetch_row ($result))
                      { echo $var[3].'<br><br>'; }
                    ?>
              </td>
              <td align="center">
                    <?php

                     $result = mysql_query ($query);

                      while( $var = mysql_fetch_row ($result))
                      { echo $var[4].'<br><br>'; }
                    ?>
              </td>
              <td align="center">
                    <?php

                     $result = mysql_query ($query);

                      while( $var = mysql_fetch_row ($result))
                      { echo $var[5].'<br><br>'; }
                    ?>
              </td>
              <td align="center">
                    <?php

                     $result = mysql_query ($query);

                      while( $var = mysql_fetch_row ($result))
                      { echo $var[6].'<br><br>'; }
                    ?>
              </td>
              <td align="center">
                    <?php

                     $result = mysql_query ($query);

                      while( $var = mysql_fetch_row ($result))
                      { echo $var[7].'<br><br>'; }
                    ?>
              </td>
           
           </tr>

           
           </table>
             <a href="logout.php" ><img src="images/logout.png"/></a>
 </div>

</div>

            <footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved. KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body></html>
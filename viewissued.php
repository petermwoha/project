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
    <li><a href="viewadministrators.php">Station administrators</a></li>
    <li><a href="addadmin.php">Add an Administrator</a></li>
    <li><a href="removeadmin.php">Remove an Administrator</a></li>
    <li><a href="viewparcels.php">Sent parcels</a></li>
    <li><a href="viewissued.php">Issued parcels</a></li>
    </ul>
    </nav>


    <div align="center">
        <h2 align="center"><u> Parcel Details</u></h2>  <br>
       <?php
           require 'conn.php';
           $query = "select * from issued";
         ?>

           <table border="1" width="80%" >
           <tr>
               <th align="center">Parcel ID.</th>
               <th align="center">Receipient Name.</th>
               <th align="center">Receipient ID.</th>
               <th align="center">Time of issue.</th>
           
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
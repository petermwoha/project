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
         <?php
          require 'conn.php';
          
          if (isset ($_POST['idNo']) && isset ($_POST['username']) && isset ($_POST['station']))
          {
             $id =  $_POST['idNo'];
             $username = $_POST['username'];
             $station = $_POST['station'];

             if (!empty ($id) && !empty ($username) && !empty ($station))
             {
                $query = "select * from administrators where idNo = '$id' && username = '$username' && station = '$station'";
                if (mysql_num_rows (mysql_query($query)) == 1)
                {
                    $query = "delete from administrators where idNo = '$id' && username = '$username' && station = '$station' ";
                    if ( mysql_query($query) )
                    {
                      echo 'Removed';
                    } else {echo 'Not removed';}
                }
                else {echo 'No such details exist in your database';}
             }
             else {echo 'Fill all the fields.';}
          }

         ?>

        <h2 align="center"><u>Enter the details of the admin to be removed</u></h2> <br><br>

        <form action="removeadmin.php" method="POST">

        National Id Number of the administrator<br> <input type="integer" pattern="[0-9]*" required placeholder="" required name="idNo" size=30> <br><br>

        Username of the administrator<br> <input type="text" name="username" pattern="[A-Za-z A-Za-z]*" required placeholder="" required size=30> <br><br>

        Station of administration <select name="station" >
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
        
        <input type="submit" value="Remove" > <br><Br>

        </form>
        <a href="logout.php" ><img src="images/logout.png"/></a>
 </div>

</div>
            
            <footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved. KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body></html>
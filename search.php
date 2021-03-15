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
        <li><a href="a_parcel.php">Add a parcel</a></li>
        <li><a href="senders.php">Senders</a></li>
        <li><a href="r_parcel.php">Receive a parcel</a></li>
        <li><a href="recepients.php">Recepients</a></li>
        <li><a href="i_parcel.php" >Issue parcel</a></li>
        <li><a href="search.php" >Parcel Report</a></li>
    </ul>
    </nav>
<div class="layout-wrapper clearfix">
                <div class="content-layout">

                    <H1 align ="center">VIEWING PARCEL BY TOWN:(Destination)</h1>

			<form action="search1.php" method="post" name="getparcel" id="getparcel">
    
      <table width="492" align="center" id="table">
      
                <tr>
          <td width="" align="right">TOWN:</td>
                       <td>
			<select name="dest" id="town">
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
                        </td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td><label></label>
              <label></label>
              <label> </label>
              <label>
              <input type="submit" name="getparcel" id="getparcel" value="Search parcel" />
              </label>
              <label></label></td>
        </tr>
      </table>
    </form>
  


                <div class="postcontent postcontent-1 clearfix">
<div class="content-layout">
<div class="content-layout-row">

            </div><footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved.KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body></html>
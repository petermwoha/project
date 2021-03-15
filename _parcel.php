<script type="text/javascript">
function validateForm()
{
var a=document.forms["form1"]["pnumber"].value;
var b=document.forms["form1"]["ptype"].value;
var c=document.forms["form1"]["senderid"].value;
var d=document.forms["form1"]["dest"].value;
var e=document.forms["form1"]["source"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("parcel number must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("please fill the type of parcel");
  return false;
  }
if (c==null || c=="")
  {
  alert("sender ID number be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("destination town must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("Address must be filled out");
  return false;
  }
</script>

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
    <ul class="hmenu"><li><a href="main.php" >Home</a></li><li><a href="#" class="active">Add a parcel</a></li><li><a href="senders.php">Senders</a></li><li><a href="r_parcel.php">Receive a parcel</a></li><li><a href="recepients.php">Recepients</a></li><li><a href="i_parcel.php" >Issue parcel</a></li></ul>
    </nav>
<div class="layout-wrapper clearfix">
                <div class="content-layout">
                    <H1 align ="center">ADDING A PARCEL </h1>


<?php 

	
 ?>

					<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
     <p align="center">
    
      <form id="form1" name="form1" method="post" action="a_parcel2.php" onsubmit="return validateForm()">
        <table align="center" width="391" border="0">
          
          <tr>
            <td><strong>Type of Parcel:</strong></td>
            <td><input type="text" name="ptype" id="textfield2" /></td>
			<td>*eg sack,envelope</td>
          </tr>
		  <tr>
            <td><strong>Sender Name:</strong></td>
            <td><input type="text" name="sname" id="textfield3" /></td>
		  </tr>
          <tr>
            <td><strong>Sender Id:</strong></td>
            <td><input type="text" name="senderid" id="textfield3" /></td>
						<td>* ie ID NO</td>
          </tr>
		  
          <tr>
            <td><strong>Destination:</strong>:</td>
            <td>
			<select name="dest" id="textfield4" >
			    <option value="NULL"><b>-- No option Selected -- </b></option>
			    <option value="Nyeri">Nyeri</option>
                <option value="Kangema">Kangema</option>
                <option value="Nairobi">Nairobi</option>
                <option value="Nyahururu">Nyahururu</option>
		<option value="Eldoret">Eldoret</option>
                <option value="Meru">Meru</option>
                <option value="Thika">Thika</option>
                <option value="kisumu">kisumu</option>
                <option value="Siaya">Siaya</option>
                <option value="Mombasa">Mombasa</option>
                <option value="Taita Taveta">Taita Taveta</option>
                <option value="Nakuru">Nakuru</option>
</select></td>
          </tr>
		  <tr>
            <td><strong>Source:</strong>:</td>
            <td>
			<select  name="source" id="textfield5" >
			    <option value="NULL"><b>-- No option Selected -- </b></option>
			    <option value="Nyeri">Nyeri</option>
                <option value="Kangema">Kangema</option>
                <option value="Nairobi">Nairobi</option>
                <option value="Nyahururu">Nyahururu</option>
				<option value="Eldoret">Eldoret</option>
                <option value="Meru">Meru</option>
                <option value="Thika">Thika</option>
                <option value="kisumu">kisumu</option>
				<option value="Siaya">Siaya</option>
                <option value="Mombasa">Mombasa</option>
                <option value="Taita Taveta">Taita Taveta</option>
                <option value="Nakuru">Nakuru</option>
</select></td>
						          </tr>
		  <tr>
            <td colspan="3"><strong><hr color="red"></strong></td>
            
			</tr>
			<tr>
            <td><strong> Receipients name:</strong></td>
            <td><input type="text" name="rname" id="textfield6" /></td>
			          </tr>
		  <tr>
            <td><strong> Receipients ID no:</strong></td>
            <td><input type="text" name="id" id="textfield6" /></td>
			<td>* ie ID NO</td>
			          </tr>
					  
          
          <tr>
            <td><strong>Receipients Mobile:</strong></td>
            <td><input type="text" name="mobile" id="textfield7" /></td>
          </tr>
        </table>
        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Add the parcel" />
          </label>
		  <p>&nbsp </p>
		  		  
		          </p>
				  <hr color="#6699CC"></hr>
				  <hr color="#6699CC"></hr>
				  <p align="center"><a href="senders.php"><img border="0" src="images/sender.png" alt="SENDER"/></a>&nbsp&nbsp&nbsp&nbsp</p>
						
		<hr color="#6699CC"></hr>
        <p align="center"><a href="main.php"><img border="0" src="images/back.png" alt="Go Back"/></a>&nbsp&nbsp&nbsp&nbsp<a href="viewparcel.php"><img border="0" src="images/view.png" alt="Go Back"/></a>&nbsp&nbsp&nbsp&nbsp <a href="search.php"><image src="images/search.png"></a></p>
      </form>
					 
                <div class="postcontent postcontent-1 clearfix">
<div class="content-layout">
<div class="content-layout-row">

            </div><footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved. KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body>
</html>
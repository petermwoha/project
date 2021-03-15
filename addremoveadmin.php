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
    <li><a href="viewadministrators.php">View your station administrators</a></li>
    <li><a href="addadmin.php">Add an Administrator</a></li>
    <li><a href="removeadmin.php">Remove an Administrator</a></li>
    <li><a href="viewparcels.php">View sent parcels</a></li></ul>

    </nav>


    <div align="center">
         <?php
         require 'conn.php';

         if (  isset ($_POST['station']) &&
               isset ($_POST['password']) &&
               isset ($_POST['passconfirm']) &&
               isset ($_POST['username']) &&
               isset ($_POST['idNo']) &&
               isset ($_POST['firstname']) &&
               isset ($_POST['lastname']) &&
               isset ($_POST['education'])
         )
          {
            $station = $_POST['station'];
            $password = $_POST['password'];
            $confirm =   $_POST['passconfirm'];
            $username = $_POST['username'];
            $hash = md5 ($password);
            $id = $_POST['idNo'];
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $education = $_POST['education'];

            if ( !empty($station) && 
                 !empty ($password) && 
                 !empty ($confirm) && 
                 !empty ($username) && 
                 !empty ($id) && 
                 !empty ($fname) && 
                 !empty ($lname) && 
                 !empty ($education)  )
            {
               if ($password == $confirm)
               {
                 $query = "SELECT * FROM administrators where station= '$station' ";

                 if ( mysql_num_rows(mysql_query($query)) == 1 )
                 {
                   echo 'The station named '.$station. ' already has an administrator';
                 }

                 else if ( mysql_num_rows(mysql_query($query)) == 0 )
                 {
                   $query = "insert into administrators values ('','$station','$password','$username','$id','$fname','$lname','$education')";
                   if (mysql_query ($query))
                   {
                     echo 'An administrator named '.$fname.' '.$lname.' has been assigned station '.$station.' to administer ';
                   }
                   else {echo 'Could not add the admininistrator named '.$station;}
                 }
               }
               else {echo 'Passwords do not match';}
            } 
            else {echo 'All fields are required here';}
          }
         ?>

        <h2 align="center"> <u>Add a new admin</u> </h2> <br>

         <form action="addremoveadmin.php" method = "POST">

        Station <br> <input type= "text" name="station" size="30" ><br><br>

        Initial Password <br> <input type= "password" name="password" size="30" ><br><br>

        Confirm Password <br> <input type= "password" name="passconfirm" size="30" ><br><br>

        National ID number <br>  <input type= "integer" name="idNo" size="30" ><br><br>
        
        Firstname <br>  <input type= "text" name="firstname" size="30" ><br><br>
        
        Lastname <br>  <input type= "text" name="lastname" size="30" ><br><br>
        
        Education Level <br>  <select type= "text" name="education"  >
                              <option>No option selected</option>
                              <option>Primary school</option>
                              <option>High school</option>
                              <option>Diploma holder</option>
                              <option>Undergraduate</option>
                              <option>Postgraduate</option>
                              </select>
                              <br><br>
        


        <input type="submit" value="Add"> <br><br>
        
        </form>

    </div>

</div>
            
            <footer class="footer clearfix">
<p>Copyright © 2014. All Rights Reserved. KAIBIRU MUTUA RAPHAEL</p>
</footer>

    </div>
</div>


</body></html>
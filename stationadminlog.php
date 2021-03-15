<?php
require 'conn.php';

if (isset ($_POST ['username']) && isset ($_POST['station']) && isset ($_POST ['password']))
{
  $username =  $_POST ['username'];
  $station = $_POST['station'];
  $password = $_POST ['password'];
  $passhash = md5 ($password);
  
  if (!empty ($username) && !empty ($station) && !empty ($password))
  {
    $query = "SELECT * FROM administrators WHERE username = '$username' 
           && password = '$passhash' && station = '$station'";
    $queryrun = mysql_query ($query);
    if ( mysql_num_rows($queryrun) == 0 )
    {
      echo 'Sorry, we could not log you in. Check your login details and try again !!';
    }
    else if ( mysql_num_rows($queryrun) == 1 )
    {
                        session_start();
			$member = mysql_fetch_assoc($queryrun);
                        $_SESSION['IDNO'] = $member['idNo'];
  			$_SESSION['USERNAME'] = $member['username'];
                        session_write_close();
			header("location: main.php");
			exit();
    }
  
  } else {echo 'All fields are necessary !!';}

}

?>
 <br>
 <h2><u>Station Administrators Login section !!. </u><br><br></h2>

  <form action= "stationadmin.php" method="POST">

  Username: <input type="text" size=30 name="username" pattern="[A-Za-z A-Za-z]*" required placeholder="" required ><br><br>

  Station of administration : <select name="station" >
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

  Password: <input type="password" size=30 name="password" ><br><br>
 
 <input type="submit" value="log in">
 
 </form>
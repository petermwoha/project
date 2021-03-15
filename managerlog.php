<?php
  require 'conn.php';
  if (isset ($_POST['officialname']) && isset ($_POST ['password']))
  {
    $name = $_POST['officialname'];
    $password = $_POST ['password'];
    $passhash = md5 ($password);
    
    if (!empty ($name) && !empty($password))
    {
      $query = "SELECT * FROM manager WHERE officialname= '$name' and password= '$passhash'";
      $queryrun = mysql_query($query);

      if (mysql_num_rows($queryrun) == 0)
      {
        echo 'Only the manager can access the requested page';
      }
      else if (mysql_num_rows($queryrun) == 1)
      {
        header ('location:managerhome.php');
      }
    } else {echo 'All field are required';}
  }
?>

<h1>Manager Login. <br><br></h1>

 <form action="managerlog.php" method="POST">

 Username: <input type="text" size=30 name="officialname"><br><br>

 Password: <input type="password" size=30 name="password" ><br><br>
 
 <input type="submit" value="log in">
 
 </form>

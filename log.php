<?php
if (isset($_POST ['email']) && isset ($_POST['password']))
{
   $email= $_POST ['email'];
   $password= $_POST ['password'];
   $password_hash = md5($password);

   if (!empty($email) && !empty($password))
   {
       $query= "SELECT * FROM users WHERE email='$email' AND password= '$password_hash'";
       if ($query_run = mysql_query($query))
       {
          $query_num_rows = mysql_num_rows ($query_run);
          if ($query_num_rows==0)
          { 
            echo 'No such account exists. Register below !!';
          }

          else if($query_num_rows==1)
          {
           header ('location:managerhome.php');
          }
       }
    }
   else {echo 'All fields Must be present';}
}
?>

<form   action= "<?php $currentfile ?>" method="POST">


<br><br>

Enter your email address <br>  <input type="email" size="35" name="email" > <br><br>

Enter your password <br>  <input type="password" size="35" name="password" > <br><br>


<input type="submit" value="log in" >  <br><br>  </h3>

New members can create their accounts <a href="register.php" >here. </a><br><br>


</form>
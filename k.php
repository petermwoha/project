<?php
         require 'conn.php'

         if (  isset ($_POST['station']) &
               isset ($_POST['password']) &&
               isset ($_POST['passconfirm']) &&
               isset ($_POST['username'])

         )
          {
            $station = $_POST['station'];
            $password = $_POST['password'];
            $confirm =   $_POST['passconfirm'];
            $username = $_POST['username'];
            $hash = md5 ($password);


            if ( !empty($station) && 
                 !empty ($password) &&
                 !empty ($confirm) && 
                 !empty ($username)
                   )
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
                   if (mysql_quey ($query))
                   {
                     echo 'An administrator named '.$fname.' '.$lname.' has been assigned station '.$station.' to administer ';
                   }
                   else {echo 'Could not add the admininistrator named '.$fname;}
                 }
               }
               else {echo 'Passwords do not match';}
            }
            else {echo 'All fields are required here';}
          }
         ?>

<h2 align="center"> <u>Add a new admin</u> </h2> <br>

         <form action="k.php" method = "POST">

        Station <br> <input type= "text" name="station" size="30" ><br><br>

        Initial Password <br> <input type= "password" name="password" size="30" ><br><br>

        Confirm Password <br> <input type= "password" name="passconfirm" size="30" ><br><br>


        


        <input type="submit" value="Add"> <br><br>
        
        </form>
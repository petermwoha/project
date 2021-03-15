<?php
error_reporting(E_ALL ^ E_NOTICE);
#Variables defined
$mysql_host=localhost;
$mysql_user=root;
$mysql_pass="";
$my_db=datarush;

#Connect function
    $DBCON=@mysql_connect($mysql_host,$mysql_user,$mysql_pass);
	
	
   if (!$DBCON) 
      {
         echo ('<p>Unable to connect to the database server..!!</p>' );
         exit();
      }
	   
	if (!@mysql_select_db($my_db))
	 {
        exit('<p>Unable to locate the database at this time.</p>');
     }
?>

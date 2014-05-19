<HTML>

<?php
  error_reporting(0);

  $username=$_GET['username'] ;
  $password=$_GET['password'] ;

  if ( $username != ""  )
  {
	  $db_username="cca2014";
	  $db_password="";
	  $database="c9";

	  mysql_connect("127.1.250.1",$db_username,$db_password);
	  @mysql_select_db($database) or die( "Unable to select database");
	  $query="SELECT 1 from users where username='$username' and password='$password'";
	  //print $query ;
	  $result=mysql_query($query);
	  $num=mysql_numrows($result);
	  mysql_close();
	  
	  if ( $num <1 )
	  {
		  print( "Authentication Failed! " ) ;
	  }
	  else 
	  {
		  print( "Authentication Successful." ) ;
	  }
  }
 
?>

</HTML>
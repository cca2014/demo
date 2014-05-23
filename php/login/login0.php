<HTML>

<?php
  error_reporting(0);

  $username=$_GET['username'] ;
  $password=$_GET['password'] ;

  if ( $username != ""  )
  {

    // Create Connection
    $con=mysqli_connect("127.1.250.1","cca2014","","c9");

    // Check Connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Query some records
    $result = mysqli_query( $con,"SELECT 1 from users where username='$username' and password='$password'");
    $num = $result->num_rows ;
    echo 'rows : ' . $num . '<br/>' ;

    // Close Connection
    mysqli_close($con);
    
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

<!--

mysql> desc users ;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| ID       | mediumint(9) | NO   | PRI | NULL    | auto_increment |
| username | varchar(60)  | YES  | UNI | NULL    |                |
| password | varchar(60)  | YES  |     | NULL    |                |
| logincnt | int(11)      | YES  |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
4 rows in set (0.00 sec)

mysql> select * from users ;
+----+----------+---------------+----------+
| ID | username | password      | logincnt |
+----+----------+---------------+----------+
|  1 | hellophp | hellophp      |     NULL |
|  2 | paul     | saPPmoXIbs91M |     NULL |
+----+----------+---------------+----------+
2 rows in set (0.00 sec)


-->
<HTML>

<?php
  error_reporting(0);

  $username=$_POST['username'] ;
  $password=$_POST['password'] ;

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
  else
  {
?>

&nbsp;
&nbsp;
&nbsp;

<form method="POST" action="<?php print htmlspecialchars($_SERVER['PHP_SELF']) ; ?>">
	<blockquote>
		<blockquote>
			<blockquote>
				<table border="1" width="55%" id="table1" style="border-width: 0px" cellspacing="5">
					<tr>
						<td width="122" style="border-style: none; border-width: medium">
						<b><font face="Arial Narrow">Login</font></b></td>
						<td style="border-style: none; border-width: medium">
						<input type="text" name="username" size="34"></td>
					</tr>
					<tr>
						<td width="122" style="border-style: none; border-width: medium">
						<b><font face="Arial Narrow">Password</font></b></td>
						<td style="border-style: none; border-width: medium">
						<input type="password" name="password" size="34"></td>
					</tr>
					<tr>
						<td style="border-style: none; border-width: medium">&nbsp;</td>
						<td style="border-style: none; border-width: medium">
						<input type="submit" value="Submit" name="submit">&nbsp;
						<input type="reset" value="Reset" name="reset"></td>
					</tr>
				</table>
			</blockquote>
		</blockquote>
	</blockquote>
	<p>&nbsp;</p>
</form>

<?php
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

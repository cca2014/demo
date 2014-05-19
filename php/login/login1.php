<HTML>

<?php
  error_reporting(0);

  $username=$_POST['username'] ;
  $password=$_POST['password'] ;

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
  else
  {
?>

&nbsp;
&nbsp;
&nbsp;

<form method="POST" action="<?php print $_SERVER['PHP_SELF'] ; ?>">
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
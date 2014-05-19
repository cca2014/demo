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
	  $hashed_password = crypt($password,'saltkey') ;
	  mysql_connect("127.1.250.1",$db_username,$db_password);
	  @mysql_select_db($database) or die( "Unable to select database");
	  $query="insert into users (username,password) values('$username', '$hashed_password')";
	  //print $query ;
	  $result=mysql_query($query);
	  $num=mysql_numrows($result);
	  mysql_close();

	  if ( $num > 0 )
	  {
		 print ("<!-- New Account Creation Successful! " . $result->getMessage() . " -->");
?>

&nbsp;
&nbsp;
&nbsp;
<form method="POST" action="<?php print $_SERVER['PHP_SELF'];?>">
	<blockquote>
		<blockquote>
			<blockquote>
				<table border="1" width="55%" id="table1" style="border-width: 0px" cellspacing="5">
					<tr>
						<td width="122" style="border-style: none; border-width: medium">&nbsp;
						</td>
						<td style="border-style: none; border-width: medium">
						<b><font face="Arial Narrow" color="#FF0000"><? echo $result->getMessage() ?></font></b></td>
					</tr>
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
						<input type="submit" value="Create Acccount" name="submit">&nbsp;
						</td>
					</tr>
					<tr>
						<td style="border-style: none; border-width: medium">&nbsp;</td>
						<td style="border-style: none; border-width: medium">&nbsp;
						</td>
					</tr>
				</table>
			</blockquote>
		</blockquote>
	</blockquote>
	<p>&nbsp;</p>
</form>	

<?php

	  }
	  else 
	  {
		  print( "<!-- New Account Creation Successful! -->" ) ;
?>

&nbsp;
&nbsp;
&nbsp;
<div align="center">
	<table border="1" width="70%" id="table1" bordercolor="#000000">
		<tr>
			<td>
			<p align="center"><font face="Arial Narrow">Welcome <? echo $username; ?>!  Your New Account has been created.</font></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p align="center"><font size="2" face="Arial Narrow">Copyright (c) 2007 You, Inc.</font></td>
		</tr>
	</table>
</div>

<?php

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
						<td width="122" style="border-style: none; border-width: medium">&nbsp;
						</td>
						<td style="border-style: none; border-width: medium">
						<b><font face="Arial Narrow" color="#0000FF">Create a new account.</font></b></td>
					</tr>
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
						<input type="submit" value="Create Acccount" name="submit">&nbsp;
						</td>
					</tr>
					<tr>
						<td style="border-style: none; border-width: medium">&nbsp;</td>
						<td style="border-style: none; border-width: medium">&nbsp;
						</td>
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
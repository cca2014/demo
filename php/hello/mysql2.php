<html>

<?php
	$db = @mysql_connect( '127.1.250.1', 'cca2014', '' ) ;
	if ( !$db ) {
		die("Database Error") ;
	}
	$rs = mysql_db_query( 'mysql', 'select host, user, password from user', $db ) ;
	$nrows = @mysql_num_rows( $rs ) ;
	print "$nrows records fetched.<br/>" ;
	$i=0;
	while ($i < $nrows) {
  		$host=mysql_result($rs,$i,"host");
  		$user=mysql_result($rs,$i,"user");
		$pwd=mysql_result($rs,$i,"password");
		print "[$i] = [$host] [$user] [$pwd]<br/>" ;	
		$i++ ;
	}
	mysql_close();
?>

</html>

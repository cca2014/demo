
<html>

<?php

	$db = @mysql_connect( '127.1.250.1', 'cca2014', '') ;
	if ( !$db ) {
		echo "Error Connecting<br>" ;
	}

	$rs = mysql_db_query( 'mysql', 'select * from user', $db ) ;
	$nrows = @mysql_num_rows( $rs ) ;
	echo "$nrows records fetch.<br>" ;

	
?>


</html>

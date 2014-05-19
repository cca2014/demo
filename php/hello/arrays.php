<?php
  $teaching = array( 'Database' => 'Smith', 'OS' => 'Carrick', 'Graphics' => 'Kam' ) ;
  $teaching['Graphics'] = 'Benson' ;
  $teaching['Data Mining'] = 'Kam' ;
  asort($teaching, SORT_STRING) ;
  foreach ( $teaching as $key => $value )
  {
	print "[$key] = $value <br/>" ;  
  }
  
  $courses = array('Database', 'OS', 'Graphics', 'Data Mining' ) ;
  $alt_row_color = array( 'blue', 'yellow' ) ;
  print "<table>" ;
  for ( $i=0, $num = count($courses); $i<$num; $i++ )
  {
    print "<TR bgcolor='" . $alt_row_color[$i%2] . "'>" ;
	print "<TD>Course $i is</TD><TD>$courses[$i]</TD>" ;
	print "</TR>" ;
  }
  print "</table>" ;
?>

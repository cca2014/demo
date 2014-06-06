
<?php
  error_reporting(0);
  $sql=$_POST['sql'] ;

  #echo "COMMAND: $sql <br/>" ;

  $output = shell_exec( "./sql.sh $sql 2>&1" );
  echo "$output";    

      
?>
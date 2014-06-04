
<?php
  error_reporting(0);
  $cmd=$_POST['cmd'] ;
  $msg=$_POST['commit_message'] ;
  
  echo "COMMAND: $cmd <br/>" ;

  if ( $cmd == "sysinfo"  )
  {
    $output = shell_exec("./sysinfo.sh");
    echo "$output";    
  }

  if ( $cmd == "gitstatus"  )
  {
    $output = shell_exec("./gitstatus.sh");
    echo "$output";    
  }

  if ( $cmd == "gitcommit"  )
  {
    $output = shell_exec("./gitcommit.sh '$msg'");
    echo "$output";    
  }

      
?>
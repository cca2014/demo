
<?php
  error_reporting(0);
  $cmd=$_POST['cmd'] ;
  $hasha=$_POST['diffa'] ;
  $hashb=$_POST['diffb'] ;
  $msg=$_POST['commit_message'] ;
  
  #echo "COMMAND: $cmd <br/>" ;

  if ( $cmd == "sysinfo"  )
  {
    $output = shell_exec("./sysinfo.sh 2>&1");
    echo "$output";    
  }

  if ( $cmd == "gitlog"  )
  {
    $output = shell_exec("./gitlog.sh 2>&1");
    echo "$output";    
  }

  if ( $cmd == "gitstatus"  )
  {
    $output = shell_exec("./gitstatus.sh 2>&1");
    echo "$output";    
  }

  if ( $cmd == "gitcommit"  )
  {
    $output = shell_exec("./gitcommit.sh '$msg' 2>&1");
    echo "$output";    
  }

  if ( $cmd == "gitpush"  )
  {
    $output = shell_exec("./gitpush.sh 2>&1");
    echo "$output";    
  }

  if ( $cmd == "gitdiff"  )
  {
    $output = shell_exec("./gitdiff.sh $hasha $hashb 2>&1");
    echo "$output";    
  }

      
?>
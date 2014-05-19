<HTML>

<?php
  error_reporting(0);

  $username=$_POST['user_name'] ;
  if ( $username != ""  )
  {
    print( "Welcome,  " ) ;
    print( $_POST['user_name'] ) ;
  }
  else
  {
?>
    <FORM method="post" action="<?php print $_SERVER['PHP_SELF'] ; ?>">
    Enter your name: <input type="text" name="user_name" ><br/>
    <input type="submit" value="SUBMIT NAME">
    </FORM>
<?php
  }
?>

</HTML>
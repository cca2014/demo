<?php
setcookie("user", "Alex Porter", time()+3600);
setcookie("count", 1, time()+3600);
?>

<html>


Here are my cookies: <br/>

<?php
print_r($_COOKIE) ;
echo "<br/><hr/>" ;

// Check of Cookie is set
if (isset($_COOKIE["user"]))
{
  setcookie("count", $_COOKIE["count"]+1, time()+3600);
  echo "Welcome " . $_COOKIE["user"] . "!<br>";
  echo "Visit Number " . $_COOKIE["count"] . "!<br>";
}
else
{
  echo "Welcome guest!<br>";
}

?>

</html>

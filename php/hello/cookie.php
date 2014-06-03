<?php

// Set a cookie
setcookie("user", "Alex Porter", time()+3600);
setcookie("count", 1, time()+3600);

// Print a cookie
echo $_COOKIE["user"] . "<br/>";
echo $_COOKIE["count"] . "<br/>";

// A way to view all cookies
print_r($_COOKIE);

// Check of Cookie is set
if (isset($_COOKIE["user"]))
{
  setcookie("count", $_COOKIE["count"]+1, time()+3600);
  echo "Welcome " . $_COOKIE["user"] . "!<br>";
  echo "Vist Number " . $_COOKIE["count"] . "!<br>";
}
else
{
  echo "Welcome guest!<br>";
}

// Set the expiration date to one hour ago
//setcookie("user", "", time()-3600);

?>
<?php
$clear = $_GET['password']  ;
$hashed = crypt($clear,'saltkey');
print $hashed .  " is the encrypted version of $clear " ;
?>
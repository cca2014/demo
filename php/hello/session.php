<?php

session_start();

if ( !isset($_SESSION['count']) ) 
{
    $_SESSION['count'] = 0 ;
    $_SESSION['user'] = "Hello User" ;
    $_SESSION['item1'] = "iPhone 6" ;
    $_SESSION['item2'] = "Mac Air Retina" ;
} 
else 
{
    $_SESSION['count']++ ;
}

echo $_SESSION['count'] . "<br/>"; 
echo $_SESSION['user'] . "<br/>";
echo $_SESSION['item1'] . "<br/>";
echo $_SESSION['item2'] . "<br/>";

?>
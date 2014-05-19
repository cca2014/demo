<?php
/* Sample Script from: http://www.weberdev.com/get_example-4694.html */

print variable_array_dump('GLOBAL SERVER', $_SERVER); 
print variable_array_dump('GLOBAL ENV', $_ENV); 
print variable_array_dump('GLOBAL REQUEST', $_REQUEST); 
print variable_array_dump('GLOBAL GET', $_GET); 
print variable_array_dump('GLOBAL POST', $_POST); 
print variable_array_dump('GLOBAL COOKIE', $_COOKIE); 

function variable_array_dump($VARIABLE_NAME, $VARIABLE_ARRAY){ 
   if (is_array($VARIABLE_ARRAY)) { 
      $output = "<table border='1'>"; 
      $output .= "<head><tr><td><b>" . $VARIABLE_NAME . "</b></td><td><b>VALUE</b></td></tr></head><body>"; 
      foreach ($VARIABLE_ARRAY as $key => $value) { 
         $value = variable_array_dump($key, $value); 
         $output .= "<tr><td>$key</td><td>$value</td></tr>"; 
      } 
      $output .= "</body></table>"; 
      return $output; 
   } else {return strval($VARIABLE_ARRAY);} 
} 
?>
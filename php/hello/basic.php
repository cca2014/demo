<?php 
  $cost = 129.99; $tax = 1.29 ; 
  $email_address = "test@sjsu.edu" ;

  print 'Welcome to my Web site. <br/>' ;  
  print 'I said to him, "Welcome Home"<br/>' ;  
  print 'We\'ll now visit the next Web site <br/>' ; 
  printf('The cost is $%.2f and the tax is $%.2f <br/>',$cost,$tax) ; 
  print strtolower('AbCdE<br/>') ; 
  print ucwords(strtolower('JOHN smith<br/>')) ; 
  print 'abc' . 'efg<br/>' ; 
  print "send your email reply to: $email_address<br/>" ; 
?> 

<br/>

<FORM method="post" action="<?php print $_SERVER['PHP_SELF'] ; ?>">
	 Enter your name: <input type="text" name="user_name"/>
</FORM>





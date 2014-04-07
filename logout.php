<?php 

 $past = time() - 100; 

 //this makes the time in the past to destroy the cookie 

 setcookie(ID_blackjack, gone, $past); 

 setcookie(Key_blackjack, gone, $past); 

 header("Location: index.php"); 

 ?> 

<?php 

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)

 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         echo "Today is Monday.\n";
         break; 
     case 2:
         echo "Today is Tuesday.\n";
         break;
     case 3:
     	 echo "Today is Wednesday.\n";
     	 break;
     case 4: 
     	echo "Today is Thursday.\n";
     	break;
     case 5: 
     	echo "Today is Friday.\n";
     	break;
     case 6:
     	echo "Today is Saturday.\n";
     	break;
     case 0:
     	echo "Today is Sunday.\n";
     	break;
 }

	if ($dayOfWeek == 1){
		echo "Today is Monday.\n";
	} else if ($dayOfWeek == 2){
	 	echo "Today is Tuesday.\n";
	} else if ($dayOfWeek == 3){
		echo "Today is Wednesday.\n";
	} else if ($dayOfWeek == 4){
	 	echo "Today is Thursday.\n";
	} else if ($dayOfWeek == 5){
	 	echo "Today is Friday.\n";
	} else if ($dayOfWeek == 6){
	 	echo "Today is Saturday.\n";
	} else if ($dayOfWeek == 0){
	 	echo "Today is Sunday.\n";
	}
 
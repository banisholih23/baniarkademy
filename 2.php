<?php
     function isAcceptedUsername($username) {
          return preg_match('/^(?=.*[a-z])(?=.*[0-9]\d).{5,8}$/i',$username) ;
     }
   
     // Cara menggunakan fungsi di atas
     if (isAcceptedUsername("bani23gg")) {
         echo "Username Is Valid" ;
     } else {
         echo "Username Is Invalid" ;
     }
    

	function isAcceptedPassword($password) {
		return preg_match('/^(?=.*[a-z])(?=.*[0-9])(?=.*[-]).{7,11}$/i', $password);
	}

	if (isAcceptedPassword("bani2323-")) {
		echo "\nPassword is Valid" ;
	} else {
		echo "\nPassword is Invalid" ;
	}
?>

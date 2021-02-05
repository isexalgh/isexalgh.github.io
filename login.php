<?php

	$alexis["password"] = "Tarel";
	$alexis["role"] = "Admin";
	$users["Alexis"] = $alexis;
	$adrien["password"] = "Raze";
	$adrien["role"] = "Admin";
	$users["Adrien"] = $adrien;
	
	if (isset($_GET["username"]) && isset($_GET["password"])) {
		if (isset($users[$_GET["username"]])) {
			if ($users[$_GET["username"]]["password"] == $_GET["password"]) {
				echo $users[$_GET["username"]]["role"];
			} else {
				echo "Incorrect password";
			}
		} else {
			echo "Unknown username";
		}
	} else {
		echo "Error";
	}
			
?>
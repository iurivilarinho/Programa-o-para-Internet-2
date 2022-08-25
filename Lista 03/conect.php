<?php

		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "mydb";

		$conn = mysqli_connect($host, $user, $pass, $db);

		if(!$conn){

		die("<h2> Conexão com SGB falhou </h2>" . mysqli_connect_error());
		}
			?>
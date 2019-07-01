
<?php 

// connect to database

	$conn = mysqli_connect('localhost', 'mario', 'test1234', 'lekka_pizza');

	// check connection
	if (!$conn) {
		echo 'Connection error: ' . mysqli_connect_error();
	}

 ?>

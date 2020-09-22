<?php

require_once("db.php");


if (isset($_POST["product_name"], $_POST["description"])) {

	$product_name = mysqli_real_escape_string($conn, $_POST["product_name"]);
	$description = mysqli_real_escape_string($conn, $_POST["description"]);

	$sql = "INSERT INTO products (product_name, description)
	VALUES ('$product_name', '$description')";
	if ($conn->query($sql) === TRUE) {
  		echo "New product created successfully";
    }
}

?>
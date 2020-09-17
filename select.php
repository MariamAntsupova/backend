<?php 
require_once("db.php");

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. "Product name: " . $row["product_name"]. "Description: " . $row["description"].
    	"Created at: " . $row["created_at"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
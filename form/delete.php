<?php 
include"header.php";
include"connection.php";
?>  

<?php


if (isset($_GET['q'])) {

  $id = $_GET['q'];
  $sql = "DELETE FROM form WHERE id=$id";


  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
} else {
  // Default value if 'name' parameter is not present in the URL
  
  $id = "Default Name";
}

header("Location: http://localhost:8080/php_practice/form/show.php");
exit; 



$conn->close();

?>
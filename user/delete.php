<?php 

session_start();

$var = $_GET['id'];

try {
  $conn = new PDO("mysql:host=localhost:3306;dbname=test2", "root", "");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM cart WHERE id='$var'";


  $conn->exec($sql);
  echo "Record deleted successfully";
  ?>
  <script>
	 window.location.assign('viewcart.php');
  </script>
  <?php

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
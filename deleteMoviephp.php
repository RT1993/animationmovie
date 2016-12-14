<?php
include 'dbconnection.php';
$movie_id = $_GET['movie_id'];
$sql = "DELETE FROM director WHERE id=$movie_id";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
<html>

<?php include 'nav.php' ?>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<body>
  <div class="body">
    <div class="background">
     <img src="image/bg7.jpg"></image>
    </div>
  </div>

  <div class="success">
   <h2> You Deleted Successfully! </h2>
  </div>
  <div class="clickback">
    <a href = "index.php" style = "text-decoration:none;">
      Click Here to Return to Homepage
    </a>
  </div> 
</body>
</html>
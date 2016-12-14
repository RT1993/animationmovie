<?php 
include 'dbconnection.php';


$title = $_POST['title'];
$rating = $_POST['rating'];
$language = $_POST['language'];
$country = $_POST['country'];



$sql = "INSERT INTO movies(title, rating, language, country) 
VALUES ('$title','$rating','$language','$country')";


?>

<html>
<body>

<?php include 'nav.php' ?>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<body>
  <div class="body">
    <div class="background">
     <img src="image/bg7.jpg"></image>
    </div>
  </div>

  <div class="success">

   <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h2> Successful!! The information has been added! ! </h2> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>
  </div>   

  <div class="clickback">
    <a href = "directorform.php" style = "text-decoration:none;">
      Click Here to Add director
    </a>
  </div> 
  
</body>
</html>
<div class="data">

<?php echo $title ?>
<br> 
<?php echo $rating ?>
<br>
<?php echo $language ?>
<br>
<?php echo $country ?>
</div>




</body>
</html>





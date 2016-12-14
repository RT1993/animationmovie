<?php 
include 'dbconnection.php';



$actor = $_POST['actor'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$country = $_POST['country'];
$Movie_id = $_POST['Movie_id'];

//Check if a doctor_id was provided if so, we're updating a doctor, otherwise we're inserting
if (isset($_POST['movie_id']))
{
  $movie_id = $_POST['movie_id'];
  $sql =  "UPDATE actor SET actor='$actor', gender='$gender', date='$date', country='$country'
  WHERE id = $movie_id";
} else {

   $sql = "INSERT INTO actor(actor, gender, date, country, Movie_id) 
   VALUES ('$actor','$gender','$date','$country','$Movie_id')";
}
?>

<html>

<body>

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
   <?php
      if ($conn->query($sql) === TRUE) {
          echo "<h2 class='form-signin-heading''>Successful!! The information has been added! !</h2> <br>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
       ?>
   </div>

  <div class="clickback">
    <a href = "index.php" style = "text-decoration:none;">
      Click Here to Return to Homepage
    </a>
  </div> 
</body>
</html>
<div class="data">
<?php echo $actor ?>
<br>

<?php echo $gender ?>
<br>

<?php echo $date ?>
<br>

<?php echo $country ?>
<br>
</div>
</body>
</html>





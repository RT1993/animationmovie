
<?php

include 'dbconnection.php';

$sql = "SELECT id, title FROM movies";
$movies = $conn->query($sql);


//Check if a doctor_id was supplied in the URL Query Parameter
if (isset($_GET['movie_id'])) {
  $movie_id = $_GET['movie_id'];
 
  $movieSQL = "SELECT * FROM actor where id = $movie_id";
  $actor =  $conn->query($movieSQL)->fetch_assoc();

      //print_r($director); die;
}



?>
 
<h1>Add / Update Movie Director</h1>

<html>
<link rel="stylesheet" type="text/css" href="styles/style.css">

<body>
  <?php include 'nav.php' ?>
    <div class="background4">
     <img src="image/bg6.jpg"></image>
    </div>

<div class="body">
    <!-- <a href ="index.php"><img src="images/doctorwho.jpg"  alt="doc" /></a> -->
</div>

   <form action="addactor.php" method="post">
    
 <div class="movieform">
    <?php 
    if(isset($movie_id)) 
     echo "<input type='hidden' name='movie_id' value=" . $movie_id . " >";
    ?>

    <div>
        <label for="Movie_id"><h1>Movie</h1></label>
         <select name="Movie_id" required/>
          <?php
          if ($movies->num_rows > 0) {
              // output data of each row
              while($row = $movies->fetch_assoc()) {
                  echo "<option value='" . $row["id"]. "'";
                  if (isset($actor) and  $actor[Movie_id] == $row["id"]) echo "selected";
                  echo ">" . $row["title"] . "</option>";
              }
          }
          ?>
         </select>

      </div>

    <div>
        <label for="actor"><h1>Actor</h1></label>
        <input type="varchar" name="actor" required <?php if (isset($actor['actor'])) echo "value='" . $actor['actor'] . "'"; ?> />

    </div>
    <div>
        <label for="gender"><h1>Gender</h1></label>
        <input type="varchar" name="gender" required <?php if (isset($actor['gender'])) echo "value='" . $actor['gender'] . "'"; ?> />
    </div>
  
    <div>
        <label for="date"><h1>Date</h1></label>
        <input type="date" name="date" required <?php if (isset($actor['date'])) echo "value='" . $actor['date'] . "'"; ?> />
    </div>   
    <div>
        <label for="country"><h1>Country</h1></label>
        <input type="varchar" name="country" required <?php if (isset($actor['country'])) echo "value='" . $actor['country'] . "'"; ?> />
    </div> 
    <div class="button">
        <button type="submit"><h1>Create</h1>
        </button>
    </div>

 </div>   
</form>

</body>
</html>
<?php
$language = $_POST['language'];
include 'dbconnection.php';


if($language=='english'){

$sql = "SELECT
  director.id as movie_id, director, gender, date, 
  movies.title as title, rating, language, movies.country as moviecountry, image
FROM director JOIN movies ON movies.id = director.Movie_id
WHERE
movies.language = 'English'";
}
else{
$sql = "SELECT
  director.id as movie_id, director, gender, date, 
  movies.title as title, rating, language, movies.country as moviecountry, image
FROM director JOIN movies ON movies.id = director.Movie_id
WHERE
movies.language = 'Japanese'";
}


$result = $conn->query($sql);


?>


<html>
<head>
  <title>ANIMATIONMOVIES</title>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
   <?php include 'nav.php' ?>
   <div class="body">
    <div class="background">
     <img src="image/bg.jpg"></image>
    </div>

    <div class="background2">
     <img src="image/bg2.jpg"></image>
    </div>
 
    <div class="background3">
     <img src="image/bg3.jpg"></image>

    </div>  

 

  <div class="options">
    <h3>FILTER:</h3>
    <form id="filter" action="filter_results.php" method="post">
       <select name="language"> 
         <option>------ Select One ------</option>
         <option value="english">English</option>
         <option value="japanese">Japanese</option>
       </select>
       <button type="submit">Go</button>
     </form>

    <h3>SORT:</h3>
     <form  action="sorted_results.php" method="post">
       <select name="sort_type">
         <option>------ Select One ------</option>
         <option value="high">High to Low</option>
         <option value="low">Low to High</option>
         
       </select>
       <button type="submit">Go</button>
     </form>
 <div>



<div class="dataadd">
  <div class="director">
    <a href = "directorform.php" style = "text-decoration:none;"><h1>ADD DIRECTOR</h1></a>
  </div>
  <div class="movie">
    <a href = "movieform.php" style = "text-decoration:none;"><h1>ADD MOVIE</h1></a>
  </div>
   <div class="actor">
    <a href = "actorform.php" style = "text-decoration:none;"><h1>ADD ACTOR</h1></a>
  </div>
</div>

  </div>



<div class = "information">
   <?php
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo 
              "<div class=row>" . 
              "<img src=image/pets.jpg". $row['image']  ."></img>" .
              "<h1>".              
              $row['title'] . " | " . 
              $row['rating'] . " | " . 
              $row['language'] . " | " .
              $row['moviecountry'] . 
              "<br>" .
              
              $row['director'] . " | " . 
              $row['date'] . " | " . 
              $row['gender'] . " | " .  "</h1>" .

               "  <a class= delete1 href=deleteMoviephp.php?movie_id=" . $row['movie_id']  ."> delete</a>" .
               "  <a class= update1 href=directorform.php?movie_id=" . $row['movie_id']  ."> update</a>".
               "</div>";
              
          }
      }
      
      ?>
<div class="ranking">
     <img src="image/ranking.jpg"></image>
</div>
</div>

</body> 
</html>


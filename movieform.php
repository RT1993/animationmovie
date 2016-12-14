
<html>
<link rel="stylesheet" type="text/css" href="styles/style.css">

<body >



<?php include 'nav.php' ?>
    <div class="background4">
     <img src="image/bg4.jpg"></image>
    </div>

<form action="addmovie.php" method="post">
  
   <div class="movieform"> 
    <div class="movietitle">
        <label for="title"><h1>Title</h1></label>
        <input type="varchar" id="title" name="title" required/>
    </div>
    <div>
        <label for="rating"><h1>Rating</h1></label>
        <input type="varchar" id="rating" name="rating" required />
    </div>  
    <div>
        <label for="language"><h1>Language</h1></label>
        <input type="varchar"id="language" name="language" required />
    </div>
    
    <div>
        <label for="country"><h1>Country</h1></label>
        <input type="varchar"id="country" name="country" required />
    </div>

    <div class="button">
        <button type="submit"><h1>SUBMIT</h1>
        </button>
    </div>
  </div>
</form>

</body>
</html>
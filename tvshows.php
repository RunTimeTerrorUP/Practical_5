<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV-Shows</title>
    <link rel="stylesheet" href="css/movies.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<!-- filter begins -->
<div id="buttons">
		<button class="button-value" onclick="getAction()"> Action & Adventure </button>
		<button class="button-value" onclick="getComedy()"> Comedy </button>
		<button class="button-value" onclick="getRomance()"> Animation </button>
		<button class="button-value" onclick="getSciFi()"> Sci-fi & Fantasy </button>
		<button class="button-value" onclick="getHorror()"> Drama </button>
</div>
<!-- filter ends -->


<div class="row_container">
    <div class="row">
        <h1 class="row_title">TRENDING NOW</h1>
        <div class="row_posters topRated" style="overflow-x: auto;">
        </div>
        <i class="fa-solid fa-chevron-right arrow"></i>
    </div> 
    </div>
    <!--Trending Now-->
    <div class="row">
        <h1 class="row_title">DRAMA</h1>
        <div class="row_posters horror">
        <div class="row_posters horror" style="overflow-x: auto;">
        </div>
        <i class="fa-solid fa-chevron-right arrow"></i>
    </div> 
    </div>
    <!--ACTION MOVIES-->
    <div class="row">
        <h1 class="row_title">ACTION & ADVENTURE</h1>
        <div class="row_posters action" style="overflow-x: auto;">
          <span>  <img src="img/large-movie1.jpg" alt="movie poster" class="movie_poster" /> </span>
        </div>
        <i class="fa-solid fa-chevron-right arrow"></i>
    </div> 
    <!--COMEDY-->
    <div class="row">
        <h1 class="row_title">COMEDY</h1>
        <div class="row_posters comedy" style="overflow-x: auto;">
        </div>
        <i class="fa-solid fa-chevron-right arrow"></i>
    </div>  
    <!--Romance-->
    <div class="row">
        <h1 class="row_title">ANIMATION</h1>
        <div class="row_posters romance" style="overflow-x: auto;">
        </div>
        <i class="fa-solid fa-chevron-right arrow"></i>
    </div> 
    <!--Science Fiction-->
    <div class="row">
        <h1 class="row_title">SCI-FI & FANTASY</h1>
        <div class="row_posters scifi" style="overflow-x: auto;">
        </div>
        <i class="fa-solid fa-chevron-right arrow"></i>
    </div> 
</div>

<!-- Modal -->
<div id="viewMovieModal" class="modal">
  <div id="viewMovieContent" class="modal-content">
    <span id="closeViewMovie">&times;</span>
    <img id="viewMoviePoster" src="" alt="Movie Poster">
    <h2 id="viewMovieTitle">Title Placeholder</h2>
    <p id="viewMovieDescription">Description Placeholder</p>
    <p id="viewMovieRating">Rating: 5</p>
    <p id="viewMovieDate">Release Date: 2024-05-29</p>
    <ul id="viewMovieActors" style=display:none>
      <li>Actor 1</li>
      <li>Actor 2</li>
    </ul>
    <button id="addToFavoritesButton" onclick="favorite()">Add To Favorites</button>
  </div>
</div>

<script src="js/shows.js"></script>


</body>
</html>

<?php

$page_title = "THE HYBRID KID";
include('includes/header.html');

?>

<!--create header-->
<header class="container-fluid" id="home">
    <div class="container">
        <!--title-->
        <h1 class="text-center">THE HYBRID KID</h1>
        
        <!--download link for hiatus-->
        <p class="text-center">
            <span>DOWNLOAD THE NEW ALBUM '<i>HIATUS</i>' </span><br />
            <a href='http://www.datpiff.com/The-Hybrid-Kid-Hiatus-mixtape.889767.html' id="DL" target="_blank" class="btn btn-lg btn-warning" title="download Hiatus"><i class="fas fa-download"></i></a>
        </p>
    </div>
 
</header><!--end of header-->



<!--music section -->
<div class="container" id="music">
   
    <div id="disc" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#disc" data-slide-to="0" class="active"></li>
        <li data-target="#disc" data-slide-to="1"></li>
        <li data-target="#disc" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./src/media/img/thk-hiatus.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
              <a href='#' class="btn btn-danger btn-md">LISTEN</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./src/media/img/man_vs_beast.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
              <a href='#' class="btn btn-danger btn-md">LISTEN</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./src/media/img/cacography.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
              <a href='#' class="btn btn-danger btn-md">LISTEN</a>
          </div>
        </div>
      </div>
      
      <a class="carousel-control-prev" href="#disc" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#disc" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
</div><!--end of music section -->




<?php
include('includes/footer.html');
?>
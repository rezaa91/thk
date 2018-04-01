<?php

$page_title = "THE HYBRID KID";
include('includes/header.html');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //handle form
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name = $_POST['name'];
    }else{
        $name = null;
    }
    
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $email = null;
    }
    
    if(isset($_POST['mobile']) && !empty($_POST['mobile'])){
        $mobile = $_POST['mobile'];
    }else{
        $mobile = null;
    }
    
    if(isset($_POST['message']) && !empty($_POST['message'])){
        $message = $_POST['message'];
    }else{
        $message = null;
    }
    
    //if form values correct
    if($name && $email && $mobile && $message){
        //send email
    }
    
}

?>

<!--create header-->
<header class="container-fluid" id="home">
    <div class="container" id="header_text">
        <!--title-->
        <h1 class="text-center" id="main_header">THE HYBRID KID</h1>
        
        <!--download link for hiatus-->
        <p class="text-center" id="sub_header">
            <span>DOWNLOAD THE NEW ALBUM '<span id="hiatus"><i>HIATUS</i></span>' </span><br />
            <a href='http://www.datpiff.com/The-Hybrid-Kid-Hiatus-mixtape.889767.html' id="DL" target="_blank" class="btn btn-lg btn-warning" title="download Hiatus"><i class="fas fa-download"></i></a>
        </p>
    </div>
</header><!--end of header-->



<!--video-->
<div class="container-fluid" id="video">
   <div class="container">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5ggItCOvE4I?autoplay=1" allowfullscreen></iframe>
        </div>
    </div>
</div><!--end of video-->





<!--music section -->
<div id="music" class="container">
    
    <h2 class="text-left">The Collection...</h2>
    
    <div id="music-carousel" class="container">

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

    </div>
    
    
</div><!--end of music section -->



<!--contact-->
<div class="container" id="contact">
    <div class="page-header">
        <h2>Get In Touch...</h2>
    </div>
    <div class="row">
    
        <div class="col-md-6">
            <div id="upcoming_events">
                <h5>Events: </h5>
                <div class="scroll">
                    <ul>
                        <li>No upcoming shows...</li>
                    </ul>
                </div>
            </div>
            
            <div id="previous_events">
                <h5>Previous Events: </h5>
                <div class="scroll">
                    <ul>
                        <li>Live show at O'Rileys <span class="incoming">07/01/17</span></li>
                        <li>BBC radio interview <span class="incoming">27/10/16</span></li>
                        <li>Live show at O'Rileys Hull <span class="incoming">01/09/16</span></li>
                        <li>Debut live show at O'Rileys Hull <span class="incoming">28/01/16</span></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <form action="index.php" method="POST">
                <div class="form-group" id="form">
                    <input type="text" name="name" class="form-control" placeholder="Name/Organisation" />
                    <input type="email" name="email" class="form-control" placeholder="Email@Example.co.uk" />
                    <input type="text" name="mobile" class="form-control" placeholder="Tel" />
                    <textarea name="message" class="form-control" placeholder="Message..." rows="7" maxlength="300"></textarea>
                    <input type="submit" name="submit" value="SEND" class="form-control btn-secondary" id="submit" />
                </div>
            </form>
        </div>
        
        
    </div><!--end of row-->
</div><!--end of contact section-->




<?php
include('includes/footer.html');
?>
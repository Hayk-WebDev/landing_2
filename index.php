<?php
include("connect/lang.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
             <title>MConcept</title>
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
             <link rel="stylesheet" href="css/style.css">
             <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
             <script src="js/jquery.counterup.min.js"></script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
         
    </head>
<body>
    <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

               <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
            <div class="overlay-content">
                  <a href="#"><?=$form['about']; ?></a>
                  <a href="#"><?=$form['services'];?></a>
                  <a href="#"><?=$form['clients']; ?></a>
                  <a href="#"><?=$form['contact']; ?></a>
            <div class="dropdown">
            <button class="dropbtn">Language</button>
              <div class="dropdown-content">
                  <a  href="?lang=am">Am</a>
                  <a  href="?lang=ru">Ru</a>
                  <a  href="?lang=en">En</a>
          </div>
        </div>
      </div>
    </div>
          
          
   <nav class="navbar navbar-light">
    <a class="navbar-brand" href="#"></a>
      <button id="openNav">
           <span></span>
           <span></span>
           <span></span>
      </button>
  </nav>
</div>
</div>
</div>
    
    
    
     </header>
     <main>

      <div class="container">
        <div class="row">
           <div class="col-lg-12 text-center text-white mt-5"><h2><b><?=$form['Our services']; ?></b> </h2>

             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
             <p  class="d-block w-75 mf"><?=$form['text']; ?> </p>
            </div>

            <div class="carousel-item">
               <p class="d-block w-75 mf"><?=$form['text']; ?></p>
            </div>

            <div class="carousel-item">
             <p  class="d-block w-75 mf"><?=$form['text']; ?></p>
            </div>
            <div class="carousel-item">
               <p class="d-block w-75 mf"><?=$form['text']; ?></p>
            </div>

            <div class="carousel-item">
                <p  class="d-block w-75 mf"><?=$form['text']; ?></p>
            </div>


             <ol class="carousel-indicators position-relative d-block">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
                </div>
            </div>
          </div>
        </div>






               <div class="row">
                    <div class="col-lg-2 m-5">
                           
                            <div class="mb-3"><a href=""><i class="fa-2x fab fa-facebook-f"></i></a></div>
                            <div><a href=""><i class=" fa-2x fab fa-instagram"></i></a></div>
                            </div>
                         </div>
                         
                         
            </div>


         <div class="container">
            <div class="row mt-5">
                <div class="col-lg-8 col-sm-12 mx-auto my-5">

                <div class="cRadius">

                     <div class="block">
                        <span class="text mf"><?=$form['WebDevelopment']; ?></span>
                         <div class="line"></div>
                          <div class="circle">
                          <a href=""><div class="circlePic p1"></div></a>
                         </div>
                    </div>

                    <div class="block">
                        <span class="text mf"><?=$form['GraphicDesing']; ?> </span>
                         <div class="line"></div>
                      <div class="circle">
                      <a href=""><div class="circlePic p2"></div></a>
                      </div>
                </div>


                <div class="block">
                 <span class="text mf"><?=$form['ui/ux']; ?></span>
                  <div class="line"></div>
                      <div class="circle">
                      <a href=""><div class="circlePic p3"></div></a>
                      </div>
                </div>


                <div class="block">
                     <span class="text mf"><?=$form['programming']; ?></span>
                      <div class="line"></div>
                      <div class="circle">
                      <a href=""><div class="circlePic p4"></div></a>
                      </div>
                </div>


                <div class="block">
                     <span class="text mf"><?=$form['design']; ?></span>
                      <div class="line"></div>
                      <div class="circle">
                      <a href=""><div class="circlePic p5"></div></a>
                      </div>
                </div>


                 <div class="block">
                     <span class="text mf"><?=$form['mobile']; ?></span>
                      <div class="line"></div>
                      <div class="circle">
                        <a href=""><div class="circlePic p6"></div></a>
                      </div>
                </div>
             <span class="lamp"> </span>

                </div>

                </div>
            </div>
         </div>

        
  <div class="container-fluid">
      <div class="row" style="background: linear-gradient(90deg,#3c6382,#82ccdd);">
        <div class="col-lg-3 col-6 counting">
          <i class="far fa-smile-wink"></i>
          <div class="num">1246</div>
          <?=$form['Speakers']; ?>
        </div>

        <div class="col-lg-3 col-6 counting">
          <i class="fas fa-briefcase"></i>
          <div class="num">19</div>
          <?=$form['services']; ?>
        </div>

        <div class="col-lg-3 col-6 counting">
          <i class="far fa-money-bill-alt"></i>
          <div class="num">687</div>
          <?=$form['Sells']; ?>
        </div>

        <div class="col-lg-3  col-6 counting">
          <i class="far fa-object-group"></i>
          <div class="num">87</div>
          <?=$form['Templates']; ?>
        </div>
      </div>
    </div>
  
        
        
        
        
        
        
        
        
        
         </main>
    <footer>
        <div class="container-fluid mf" style="line-height:21px;">
          <div class="row contact  d-flex justify-content-center">
            <div class="col-lg-8 text-white p-4 ml-5"><b>We act in our clients’ long term interests to build the mutually beneficial partnerships.</b> </div>
             <div class="col-lg-2 p-4  text-right mr-5"><button type="button" class="btn bg-transparent text-white border-secondary  ml-5 w-75">CONTACT US</button> </div>

        </div>
      <div class="row mt-5 text-white d-flex justify-content-center">

              <div class="col-lg-3 col-6">
              <h4 class="uppercase"><?=$form['services']; ?></h4>
              <br>
               <p> <a href=""><?=$form['CustomSoftwareDevelopment']; ?></a></p>
               <p> <a href=""><?=$form['GraphicDesing']; ?> </a> </p>
               <p> <a href=""><?=$form['Prototyping']; ?></a></p>
                 <p>  <a href=""><?=$form['UserExperienceDesign']; ?></a></p>
                 <p> <a href=""><?=$form['GraphicDesignCourses']; ?></a> </p>
                <p> <a href=""><?=$form['WebDevelopment']; ?></a></p>
              </div>


              <div class="col-lg-2 col-6">
              <h4 class="uppercase"><?=$form['Company']; ?></h4>
              <br>
                   <p> <a href=""><?=$form['Portfolio']; ?></a></p>
                   <p> <a href=""><?=$form['Courses']; ?></a></p>
                   <p> <a href=""><?=$form['about']; ?></a></p>
          </div>

              <div class="col-lg-3 col-6">
              <h4 class="uppercase"><?=$form['Contacts']; ?></h4>
              <br>
                <p><?=$form['Callus']; ?>: +374 77 22 22 22</p>
                  <p><a href=""><?=$form['request']; ?></a></p></div>

              <div class="col-lg-2 col-6 text-right">
              <b><?=$form['STAYCONNECTED']; ?> </b><br>
               <span><a href=""><i class="fa-2x fab fa-facebook-f m-3"></i></a></span>
                <span> <a href=""><i class="fa-2x fab fa-instagram"></i> </a></span></div>
               <hr class="border-secondary w-100">
         <div class="ml-auto mb-3 mr-5 ">© 2020 Mconcept. All rights reserved.</div>

            </div>
         </div>
    </footer>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
$('.num').counterUp();
  </script>
</body>
</html>

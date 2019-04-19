<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Live cricket Score</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">



        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="100">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed no-background white">

                <!-- Start Top Search -->

                <!-- End Top Search -->


                <div class="container"> 
                    <div class="attr-nav">
       
                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#home">
                            <h4 class="text-yellow">Live Cricket Score</h4>
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="criclive/summary.php">Live matches</a></li>                    
                            <li><a href="#features">Upcoming Matches</a></li>
                            <li><a href="#service">Player Ranking</a></li>
                            <li><a href="#portfolio">Team Ranking</a></li>
                            <li><a href="#contact">Player Statics</a></li>
                            <li><a href="Login_v1/index1.php">Admin Login</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <!--Home Sections-->
            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <?php
                                            include('createplayer/search.php');
                                            ?>
                                        </div>
                                    </div><!-- End off slid item -->

                                </div>
                            </div>

                        </div>
                            <!--<i class="fa fa-angle-down m-top-10 fadeIn mouse-message"></i>--> 
                        
</div>
                    </div><!--End off row-->
             
                </div><!--End off container -->
            </section> 


            <!--About Section-->
            <!--Featured Section-->
            <section id="features" class="features bg-white">
                   
                <div class="container">
                   <div class="head_title">
                                     <br> <br>  <h2 class="text-uppercase">upcoming <strong>Schedule</strong></h2>
               
                
							<?php
					 include('creatematch/display.php'); 
					 ?>
                            <div class="col-md-5">
                                <div class="features_item">
                                 
                                    <div class="featured_content">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-1 sm-m-top-50">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->


            <!--Business Section-->
            <section id="service" class="service bg-grey roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_service">
                            <div class="col-md-6">
                                <div class="service_slid">
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off Business section -->


            <!--Team And Skill Section-->
            <section id="teams" class="teams roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_teams_content fix">
                            <div class="col-md-6">
                                    <div class="head_title">
                                        <h2 class="text-uppercase">Player <strong>Ranking</strong></h2>
                                    </div>
										
</section>
  <!-- Navigation -->
  
    <div class="container">
      
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" style="background-color: #dfe1f7;">
	<h2 style="color:black;text-align: center;">Player Ranking</h2><br>
            <h4  style="color:black">TEST</h4><br>
   <a href="ranking/testbat/testbat.php">Batsmen</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="ranking/testbowl/odibowl.php">Bowler</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="ranking/testar/odibat.php">All-Rounder</a><br><br><br><br>
   <h4  style="color:black">ODI</h4><br>
<a href="ranking/odibat/odibat.php">Batsmen</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="ranking/odibowl/odibowl.php">Bowler</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="ranking/odiar/odibat.php">All-rounder</a><br><br><br><br>
   <h4  style="color:black">T20</h4><br>
   <a href="ranking/t20bat/t20bat.php">Batsmen</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="ranking/t20bowl/t20bowl.php">Bowler</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="ranking/t20ar/t20bat.php">All-Rounder</a><br><br><br><br>
        </div>
   




  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>





                                </div>
                            </div>
                             <!-- End off col-md-4 -->
                                 
                                    </div>
                                </div>
               
            </section><!-- End off Team & Skill section -->


            <!--Choose section-->
<!-- End off col-md-6 -->

<!-- End off choose section -->


            <!--Portfolio Section-->




<section id="portfolio" class="teams roomy-80">
    <div class="container"><br>
 <div class="head_title">
                  <h2 class="text-uppercase">Team <strong>Ranking</strong></h2>
 </div>
</section>
  <!-- Page Content -->

  <div class="container" style="background-color: #dfe1f7;">
   <h2 align="center">Team Ranking</h2>
   Test Team Ranking&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ranking/testteam/index1.php">TEST</a><br><br>
      ODI Team Ranking&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ranking/oditeam/index1.php">ODI</a><br><br>
         T20 Team Ranking&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ranking/t20team/index1.php">T20</a><br><br>
   </div>

</div>
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<section id="contact" class="teams roomy-80">
    <div class="container"><br>
 <div class="head_title">
                  <h2 class="text-uppercase">Player<strong>Statics</strong></h2>
 </div>
</section>







                           



        <!-- Blog Post -->
        <div class="container" align="left">
        <div class="row" align="center">
        <div class="card mb-4" style="width: 1100px;background-color: #dfe1f7;align:center;">
          <div class="card-body" style="text-align: center;"><br><br><br><br><br><br><br>
            <h2 class="card-title">Player Statics</h2>
            <a href="cricket/Batsman.php" class="btn btn-primary">Batsmen Statics &rarr;</a>
             <a href="cricket/Bowler.php" class="btn btn-primary">Bowler Statics &rarr;</a><br><br><br><br><br><br><br><br><br><br>
             </div>
             </div>

</div>
</div><br>
<div style="background-color:black;">
<h3 align="center" style="color:white;">Designed by CricTeam</h3><br>
</div>

             

        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <!--<script src="assets/js/jquery.easypiechart.min.js"></script>-->
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <!--<script src="assets/js/slick.js"></script>-->
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/js.isotope.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>

        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

<div>

</div>


    </body>
</html>

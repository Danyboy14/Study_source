<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Study Source | Your one stop shop for study notes </title>


        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="styles/main.css" />

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
       
    </head>
    <body id="page-top">
        <?php if (login_check($mysqli) == true) : ?>
       <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="protected_page.php">Home </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#portfolio">Buy/Sell</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">About</a>
                        </li>
                      
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                         <li>
                            <a class="page-scroll" href="account.php"><?php echo $_SESSION["username"]; ?></a>
                        </li>
                         <li>
                            <a class="page-scroll" href="includes/logout.php">Log Out</a>
                        </li>
                      
                          
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <section class ="container">
            <div class="header-content">
                <div class="container" style="width:500px;text-align: center;">
                    <h2 class="form-signin-heading" style = "text-align: center; color: black;"> <b>My Folder </b> </h2>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>

                                       
               
            </h2>
                </div>
            </div>
        </section>

         <section class ="bg-primary" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <h1 style="text-align: center;">Buy</h1>
                    <a href="browse.php" class="portfolio-box">
                        
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                               
                                <div class="project-name">
                                    Browse Notes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                                      <h1 style="text-align: center;">Folder</h1>
                    <a href="folder.php" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                    
                        <div class="portfolio-box-caption">
              
                            <div class="portfolio-box-caption-content">
                            
                                <div class="project-name">
                                    My Folder
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">    
                          <h1 style="text-align: center;">Sell</h1>
                    <a href="sell.php" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                               
                                <div class="project-name">
                                    Sell Notes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Our Service</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                            <h3>Find notes</h3>
                            <br>

                        
                            <p class="text-muted">If you're in need of notes you can find them here.</p>
                            <br>
                            <p class="text-muted">Our users upload their own notes which are then reviewed and rated.</p>
                            <br>
                            <p class="text-muted">They are then available to purchase and download.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                            <h3>Sell notes</h3>
                            <br>
                            <p class="text-muted">If you make high quality notes, you can sell them here.</p>
                            <br>
                            <p class="text-muted">Upload your notes and set whatever price you want for them.</p>
                            <br>
                            <p class="text-muted">Why not make a profit for all your hard work?</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                            <h3>Search by subject</h3>
                            <br>
                            <p class="text-muted">Find the perfect notes for you using our search feature.</p>
                            <br>
                            <p class="text-muted">Whether you study Geography, Business or Computer science. We will have the notes for you.</p>
                            <br>
                            <p class="text-muted">See reviews and browse by ratings to help you choose.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                            <h3>Leaving cert or College?</h3>
                            <p class="text-muted">We offer notes in both leaving cert subjects and college modules.</p>
                     
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <section class ="bg-primary" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Get in touch!</h2>
                        <hr class="primary">
                        <p>If you have an queries please contact us here.</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <i class="fa fa-phone fa-3x wow bounceIn"></i>
                        <p style="color: #FFFFFF" >0877517474</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                        <p><a href="mailto:your-email@your-domain.com" style="color: #FFFFFF">customersupport@studysource.ie</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="js/login.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/wow.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/creative.js"></script>

        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
        <?php endif; ?>

    </body>
</html>

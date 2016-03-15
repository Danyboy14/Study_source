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
<html lang="en">
 <title>Leaving Cert</title>
 <head>
    <link rel="stylesheet" href="notes.css" type="text/css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
 </head>
<body id="page-top">
    
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

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Leaving Cert notes</h1>
                <hr>
                <p>Browse our collection of notes</p>
                <a href="#subject-list" class="btn btn-primary btn-xl page-scroll">Browse</a>

            </div>
        </div>
    </header>
    
    <div class = "side-panel" id="subject-list">
                <h3>Leaving Cert</h3>
                    <h4>Subjects</h4>
                    <ul>
                        <li><a href="#maths">Maths</a></li>
                        <li><a href="#business">Business</a></li>
                        <li><a href="#history">History</a></li>
                        <li><a href="#geography">Geography</a></li>
                        <li><a href="#biology">Biology</a></li>
                        <li><a href="#">Chemistry</a></li>
                        <li><a href="#">Physics</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Accounting</a></li>
                        <li><a href="#">Economics</a></li>

                    </ul>
	</div>
    
    <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search for notes" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select class="form-control">
                                        <option value="0" selected>All Snippets</option>
                                        <option value="1">Featured</option>
                                        <option value="2">Most popular</option>
                                        <option value="3">Top rated</option>
                                        <option value="4">Most commented</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Author</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Contains the words</label>
                                    <input class="form-control" type="text" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
               
            </div>
            <!--End search bar-->
<div id = "contents">
                <div class="notes" id="maths">
                <h3>Maths</h3>
                <ul>
                    <li>
                        <div class="product">
                            <a href="#" class="info">
                                <span class="holder">
                                    <img src="css/images/image01.jpg" alt="" />
                                    <span class="book-name">Book Name</span>
                                    <span class="author">by John Smith</span>
                                    <span class="description">Maths vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
                                </span>
                            </a>
                            <a href="#" class="buy-btn"> 10.00</a>
                        </div>
                    </li>
                    <li>
                        <div class="product">
                            <a href="#" class="info">
                                <span class="holder">
                                    <img src="css/images/image02.jpg" alt="" />
                                    <span class="book-name">Book Name</span>
                                    <span class="author">by John Smith</span>
                                    <span class="description">Maths notes etc etc <br />scelerisque dignissim <br />sollicitudin nisi</span>
                                </span>
                            </a>
                            <!--This works but changing to just price--<a href="#" class="buy-btn">BUY NOW <span class= "note-price"> £10.00 </span></a><!--<span class="price"><span class="low">$</span>22<span class="high">00</span></
                            span></a>-->
                            <a href="#" class="buy-btn"> 10.00</a>
                            
                        </div>
                    </li>
                </ul>
            </div><!--end maths-->
            <div class="notes" id="business">
                <h3>Business</h3>
                    <ul>
                    <li>
                        <div class="product">
                            <a href="#" class="info">
                                <span class="holder">
                                    <img src="css/images/image03.jpg" alt="" />
                                    <span class="book-name">Book Name</span>
                                    <span class="author">by John Smith</span>
                                    <span class="description">Business notes etc etc<br />scelerisque dignissim <br />sollicitudin nisi</span>
                                </span>
                            </a>
                            <a href="#" class="buy-btn"> 10.00</a>
                        </div>
                    </li>
                    <li>
                        <div class="product">
                            <a href="#" class="info">
                                <span class="holder">
                                    <img src="css/images/image04.jpg" alt="" />
                                    <span class="book-name">Book Name</span>
                                    <span class="author">by John Smith</span>
                                    <span class="description">Business notes etc etc<br />scelerisque dignissim <br />sollicitudin nisi</span>
                                </span>
                            </a>
                            <a href="#" class="buy-btn"> 10.00</a>
                        </div>
                    </li>
                    </ul>
                    </div>
                <div class="notes" id="history">
                <h3>History</h3>
                    <ul>
                    <li>
                        <div class="product">
                            <a href="#" class="info">
                                <span class="holder">
                                    <img src="css/images/image05.jpg" alt="" />
                                    <span class="book-name">Book Name</span>
                                    <span class="author">by John Smith</span>
                                    <span class="description">History notes etc etc<br />scelerisque dignissim <br />sollicitudin nisi</span>
                                </span>
                            </a>
                            <a href="#" class="buy-btn"> 10.00</a>
                        </div>
                    </li>
                    </ul>
                    </div><!--end history-->
                    <div class="notes" id="geography">
                    <h3>Geography</h3>
                    <ul>
                    <li>
                        <div class="product">
                            <a href="#" class="info">
                                <span class="holder">
                                    <img src="css/images/image06.jpg" alt="" />
                                    <span class="book-name">Book Name</span>
                                    <span class="author">by John Smith</span>
                                    <span class="description">Geography notes etc etc<br />scelerisque dignissim <br />sollicitudin nisi</span>
                                </span>
                            </a>
                            <a href="#" class="buy-btn"> 10.00</a>
                        </div>
                    </li>
                    <li>
                        <div class="product">
                            <a href="#" class="info">
                                <span class="holder">
                                    <img src="css/images/image07.jpg" alt="" />
                                    <span class="book-name">Book Name</span>
                                    <span class="author">by John Smith</span>
                                    <span class="description">Geo notes etc etc ...<br />scelerisque dignissim <br />sollicitudin nisi</span>
                                </span>
                            </a>
                            <a href="#" class="buy-btn"> 10.00</a>
                        </div>
                    </li>
                    </ul>
                    </div><!--end geo-->
                    <div class="notes" id="biology">
                    <h3>Biology</h3>
                    <ul>
                    <li>
                        <div class="product">
                            <a href="#" class="info">
                                <span class="holder">
                                    <img src="css/images/image08.jpg" alt="" />
                                    <span class="book-name">Book Name</span>
                                    <span class="author">by John Smith</span>
                                    <span class="description">Biology  vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
                                </span>
                            </a>
                            <a href="#" class="buy-btn"> 10.00</a>
                        </div>
            <!-- End Products -->
                </ul>
</div><!--end browse-->
</body>
 </html>
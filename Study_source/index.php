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

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Study Source | Log In</title>
        <link rel="stylesheet" href="css/log.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
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
                    <a class="navbar-brand page-scroll" href="index.html">Home </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div class="container" id ="login" style="width:500px;text-align: center;">
          <br/>
            <form action="includes/process_login.php" method="post" name="login_form" class ="form_sign in">
                <h2 class="form-signin-heading"> Login </h2>

               	<p>	
                 Email: <input type="text" name="email"  placeholder="E-mail" class="form-control"  required autofocus/>
                </p>

            </p>
            Password: <input type="password" 
                                 name="password" 
                                 id="password" class="form-control" placeholder="Password" required/>
               
            </p>
               <p> <input type="button" 
                       value="Login" 
                       class="btn btn-lg btn-primary btn-block"
                       onclick="formhash(this.form, this.form.password);" /> 
                </p>
         
            <p><a href="register.php" class="btn btn-default btn-xl">register</a></p>

            <br/>
              <?php
            if (isset($_GET['error'])) {
                echo '<p class="error">Error Logging In!</p>';
            }
            ?> 


            </form>
            
        </div>
    </body>
</html>

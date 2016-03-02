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
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Study Source | Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="css/log.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
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
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="index.php">Login</a>
                        </li>
      
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
         <div class="container" id ="login" style="width:500px;text-align: left;">
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1 class="form-signin-heading" >Register</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        
            <p>Usernames may contain only digits, upper and lower case letters and underscores</p>
          
            <p>Passwords must
                <ul>
                    <li>be at least 6 characters long</li>
                    <li>contain at least one upper case letter (A..Z)</li>
                    <li>contain at least one lower case letter (a..z)</li>
                    <li>contain at least one number (0..9)</li>
                </ul>
        
        
        <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
            Username: <input class="form-control"  required type='text' name='username' id='username' /><br>
            Email: <input class="form-control"  required type="text" name="email" id="email" /><br>
            Password: <input class="form-control"  required
                             type="password"
                             name="password" 
                             id="password"/><br>
            Confirm password: <input class="form-control"  required
                                     type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br>
            <input type="button" 
                   value="Register" 
                   class="btn btn-lg btn-primary btn-block"
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
           
        </form>
        
    </div>
    </body>
</html>

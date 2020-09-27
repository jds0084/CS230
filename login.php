<?php
require 'includes/header.php'
?> 
    

    <main>
    <link rel="stylesheet" href="css/login.css">
        <div class = "background_cover">
            <div class = "picture">
                <div style = "position: absolute; left: 750px; top: 440px; height: 100px; width: 100px">
                    <image src="images/stick.png">
              </div>

            <div class = "container" style="padding-top: 50px; position: absolute; left:665px; top:50px;">
                <div id="slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#slider" data-slide-to="0" class="active"></li>
                      <li data-target="#slider" data-slide-to="1"></li>
                      <li data-target="#slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active img-fluid">
                        <img class="d-block mx-auto" src="images/FullSizeRender.jpeg" alt="First slide">
                      </div>
                      <div class="carousel-item img-fluid">
                        <img class="d-block mx-auto" src="images/IMG_9058-1024x768.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item img-fluid">
                        <img class="d-block mx-auto" src="images/edd705de83b86b9e56e4fce8843e6b8b.png" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

            <div class = "h-40 center">
                <div class = "auto_right">
                    <form class = "sign_in" action = "includes/login-helper.php" method = "post"style = "background: white; position: absolute; left:300px; top:100px;">
                     <h1 class="h3 mb-3 font-weight-normal">Sign in here</h1>
                        <label for="inputEmail" class="sr-only">Username or Email</label>
                            <input type="text" id="inputEmail" name = "uname" class="form-control" placeholder="Username/ Email" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword"  name = "pwd" class="form-control" placeholder="Password" required>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me" style="margin: 20px;"> Remember this login
                            </label>
                        </div>
                        
                <button class="btn btn-lg btn-warning btn-block" name = "login-submit" type="submit" >Sign in </button>
                <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </form>
               </div>
            </div>

        

        <div class = "message">
            <h2 style = "font-family: Franklin Gothic Medium; font-size: 240%; position: absolute; left: 745px; top: 400px;">~ 6 SOFTWARE SOLUTIONS ~</h1>
        </div>

      

            

        
</main>

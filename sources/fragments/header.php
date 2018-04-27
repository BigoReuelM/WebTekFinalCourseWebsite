    
    <!-- Header area wrapper Starts -->
    <header id="header-wrap">
      <!-- Roof area Starts -->
      <div id="roof" class="hidden-xs">
          <div class="container">
              <div class="quick-contacts pull-right">
                  <span><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user"></i> Login</a>
              </div>
          </div>
      </div>
      <!-- Roof area End -->

      <!-- Navbar Start -->
      <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt=""></a>
            </div>
            <!-- Brand End -->

            <!-- Collapse Navbar -->
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-toggle">
                  <a class="active" href="index.php">Home</a>
                  <ul class="dropdown-menu">  
                  </ul>                        
                </li>
                <li class="dropdown dropdown-toggle">
                  <a href="#" data-toggle="dropdown">Topics<i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="servletsMainPage.php">Java Web Servlets</a></li>    
                    <li><a href="jspMainPage.php">Java Server Pages (JSP)</a></li>  
                    <li><a href="phpMainPage.php">PHP</a></li>
                    <li><a href="nodeMainPage.php">Node.js</a></li>  
                    <li><a href="webSecurityMainPage.php">Web Application Security</a></li> 
                  </ul>                        
                </li>
                <li class="dropdown dropdown-toggle">
                  <a href="#">Activities</i></a>                      
                </li> 
                <li class="dropdown dropdown-toggle">
                  <a href="#">Sources</i></a>                       
                </li>              
                <li><a href="#">Team</a></li>
              </ul>
            </div>    

            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
              <li>
                <a class="active" href="index.php">Home</a>                       
              </li>
              <li>
                <a href="#">Topics</a>
                <ul>
                  <li><a href="servletsMainPage.php">Java Web Servlets</a></li>    
                  <li><a href="jspMainPage.php">Java Server Pages (JSP)</a></li>  
                  <li><a href="phpMainPage.php">PHP</a></li>
                  <li><a href="nodeMainPage.php">Node.js</a></li>  
                  <li><a href="webSecurityMainPage.php">Web Application Security</a></li>    
                </ul>                        
              </li> 
              <li>
                <a href="#">Activities</a>                       
              </li>
              <li>
                <a href="#">Sources</a>                       
              </li>              
              <li><a href="#">Team</a></li>
            </ul>
            <!-- Mobile Menu End -->

          </div>
      </nav>
      <!-- Navbar End -->

    </header>
    <!-- Header area wrapper End -->

    <!-- login modal -->

    <div class="modal" tabindex="-1" role="dialog" id="loginModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Log In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" class="form-inline" id="loginForm">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control">
              </div>
            </form>
            <form action="" class="form-inline">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button form="loginForm" type="submit" class="btn btn-primary">Log In</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- end of login modal -->
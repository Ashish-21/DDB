<!DOCTYPE HTML>

<html>

<head>
  <title>DIP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
/*!
 * Start Bootstrap - Simple Sidebar (https://startbootstrap.com/template-overviews/simple-sidebar)
 * Copyright 2013-2017 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-simple-sidebar/blob/master/LICENSE)
 */

 body {
  overflow-x: hidden;
}
#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled {
  padding-left: 250px;
}

#sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background:#FFFDEF;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

#page-content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -250px;
}


/* Sidebar Styles */

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px;
}

.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color:#E70000;
}

.sidebar-nav li a:hover {
  text-decoration: none;
  color: #FFFDEF;
  background:#E70000;
}

.sidebar-nav li a:active, .sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav>.sidebar-brand {
  height: 65px;
  font-size: 18px;
  line-height: 60px;
}

.sidebar-nav>.sidebar-brand a {
  color: #FFFDEF;
  background: #E70000;

}

.sidebar-nav>.sidebar-brand a:hover {
  color: #FFFDEF;
  background: #E70000;
}

@media(min-width:768px) {
  #wrapper {
    padding-left: 0;
  }
  #wrapper.toggled {
    padding-left: 250px;
  }
  #sidebar-wrapper {
    width: 0;
  }
  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }
  #page-content-wrapper {
    padding: 20px;
    position: relative;
  }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
  }
}



</style>




</head>


<body style="background:#F1F1F1;">

    <!-- Navbar-->
    <button  style="background-color:#FFFDEF;  top:5px;right:5px; z-index:100;" class="navbar-toggler navbar-toggler-right" type="button"  id="menu-toggle"data-target="#menu-toggle" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <nav class="navbar  navbar-light navbar-static-top navbar-fixed-top" style="overflow-x:hidden;background-color:#C50000; width:100%;">

        <a class="navbar-brand" style="color:#FFFDEF">GHR-1</a>
      </nav>
    <!--navbar ends-->

 <!--Side  Navbar-->

      <div id="wrapper">
                  <!-- Sidebar -->
                  <div id="sidebar-wrapper">
                      <ul class="sidebar-nav">
                          <li class="sidebar-brand">
                              <a href="#" id="profilename">
                                  Username
                              </a>
                          </li>
                          <li>
                              <a id="register" routerLink="/register"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;Register</a>
                          </li>
                          <li>
                              <a id="login" routerLink="/login">
                                <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Login
                              </a>
                          </li>
                          <li>
                              <a routerLink="/dashboard" id="dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard</a>
                          </li>
                          <li>
                            <a routerLink="/contacts" id="dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;&nbsp;Save Contacts</a>
                        </li>

                          <li>
                              <a href="#" id="update"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;Settings</a>
                          </li>

                          <li>
                              <a href="#" id="about"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a>
                          </li>
                          <li>
                              <a href="#" id="about"><i class="fa fa-sticky-note" aria-hidden="true"></i>&nbsp;&nbsp;About-us</a>
                          </li>

                      </ul>
                  </div>
                  <!-- /#sidebar-wrapper -->

                  <!-- Page Content -->
                  <div id="page-content-wrapper" style="overflow: hidden;">
                          <router-outlet #o="outlet"></router-outlet>
                  </div>
                  <!-- /#page-content-wrapper -->
              </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
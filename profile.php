<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIP</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
    <script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCvgL67Mgs5WuegpA4IE5RozC4eAwZfT10",
    authDomain: "signin-9768.firebaseapp.com",
    databaseURL: "https://signin-9768.firebaseio.com",
    projectId: "signin-9768",
    storageBucket: "signin-9768.appspot.com",
    messagingSenderId: "617849813600"
  };
  firebase.initializeApp(config);

	firebase.auth().onAuthStateChanged(function(user) {
	if (user) {
	console.log(user.displayName);
    $('#username').html(user.displayName);
    }
	else {
    window.location.href = "home.php";
	}
	});
</script>


    <style>
    body {
  overflow-x: hidden;
}
#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.1s ease;
  -moz-transition: all 0.1s ease;
  -o-transition: all 0.1s ease;
  transition: all 0.1s ease;
}

#wrapper.toggled {
  padding-left: 250px;
  -webkit-transition: all 0.1s ease;
  -moz-transition: all 0.1s ease;
  -o-transition: all 0.1s ease;
  transition: all 0.1s ease;
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

.bgColor {
max-width: 440px;
height:150px;
background-color: #fff4be;
border-radius: 4px;
}
.bgColor label{
font-weight: bold;
color: #A0A0A0;
}
#targetLayer{
float:left;
width:150px;
height:150px;
text-align:center;
line-height:150px;
font-weight: bold;
color: #C0C0C0;
background-color: #F0E8E0;
border-bottom-left-radius: 4px;
border-top-left-radius: 4px;
}
#uploadFormLayer{
	float:left;
	padding: 20px;
}
.btnSubmit {
	background-color: #696969;
    padding: 5px 30px;
    border: #696969 1px solid;
    border-radius: 4px;
    color: #FFFFFF;
    margin-top: 10px;
}
.inputFile {
	padding: 5px;
	background-color: #FFFFFF;
	border:#F0E8E0 1px solid;
	border-radius: 4px;
}
.image-preview {
width:150px;
height:150px;
border-bottom-left-radius: 4px;
border-top-left-radius: 4px;
}

    </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" style="margin:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div id="wrapper" style="margin:50px;">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand active">
                    <a href="profile.php" id="username">
                    </a>
                </li>
                <li>
                    <a href="#uploadA" data-toggle="pill">Upload Aadhar</a>
                </li>
                <li>
                    <a href="#PD" data-toggle="pill">Personal Details</a>
                </li>
                <li>
                    <a href="#ED" data-toggle="pill">Educational Details</a>
                </li>
                <li>
                    <a href="#PDD" data-toggle="pill">Professional Details</a>
                </li>
                <li>
                    <a href="#OD" data-toggle="pill">Other Details</a>
                </li>
                <li>
                    <a href="#UDD" data-toggle="pill">Upload Documents</a>
                </li>

                <li>
                    <a href="#signout" id="signout" data-toggle="pill">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper class="tab-content"">
            <div id="uploadA" class="tab-pane fade">
              <div id="targetLayer">No Image</div>
              <form id="uploadForm">
                  <label>Upload Image File:</label><br/>
                  <input name="userImage" type="file" class="inputFile" />
                  <input type="submit" value="Submit" class="btnSubmit" />
              </form>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <!-- Menu Toggle Script -->
    <script>
    $(document).ready(function(){
        $("#wrapper").toggleClass("toggled");
    });
	     $("#uploadForm").on('submit',(function(e) {
		       e.preventDefault();
           alert("Done");
             $.ajax({
        	      url: "upload.php",
			          type: "POST",
			          data:  new FormData(this),
			          contentType: false,
			          processData:false,
			          success: function(data)
		            {
                  console.log(data);
                  //console.log("done");
                //  $("#targetLayer").html(data);
                },
		  	        error: function()
	    	        {
                  console.log("Error");
	    	        }
	            });
	      }));
  $('#signout').click(function()
  {
    firebase.auth().signOut().then(function() {
  console.log('Signed Out');
  window.location.href = "home.php";
}, function(error) {
  console.error('Sign Out Error', error);
});
  })
    </script>

</body>

</html>

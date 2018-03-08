<!DOCTYPE html>
<html>
<title>DIP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
<script src="https://cdn.firebase.com/libs/firebaseui/2.6.2/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.6.2/firebaseui.css" />
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
var uiConfig = {
        signInSuccessUrl: 'profile.php',
        signInOptions: [
          // Leave the lines as is for the providers you want to offer your users.
          firebase.auth.GoogleAuthProvider.PROVIDER_ID
        ],
        // Terms of service url.
        tosUrl: '<loggedin.html>'
      };
       var ui = new firebaseui.auth.AuthUI(firebase.auth());
      // The start method will wait until the DOM is loaded.
      ui.start('#firebaseui-auth-container', uiConfig);



	firebase.auth().onAuthStateChanged(function(user) {
	if (user) {
	console.log(user.displayName);
    window.location.href = "profile.php";
    }
	else {

	}
	});




</script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('images/front2.jpg');
    min-height: 100%;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button" style="color:#EEEEEE;"><i class="fa fa-home"></i>  HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small" style="color:#EEEEEE;"><i class="fa fa-user"></i>  ABOUT-US</a>
     </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" style="color:#EEEEEE;"onclick="toggleFunction()">ABOUT-US</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div style="margin-top:50px;"class="w3-display-middle" style="white-space:nowrap;">
    <button class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">DIGITAL SECURITY</button>
    <div id="firebaseui-auth-container" style="background=black; !important"></div>

 </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em>Digital Security</em></p>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

</div>

<div class="w3-row w3-center w3-padding-16" style="background:#393E46;" >
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">+</span><br>
    Security
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">+</span><br>
    Security
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">+</span><br>
    Security
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">+</span><br>
    Security
  </div>
</div>


    <!-- Footer -->
<footer class="w3-center w3-black w3-padding-60">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Digital Identity Platform</a></p>
</footer>

<!-- Add Google Maps -->
<script>

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-black";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-black", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>

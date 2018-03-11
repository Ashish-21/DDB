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

        #wrapper {
            padding-left: 250px;
            transition: all 0.4s ease 0s;
        }
        .navbar
        {
            background-color: #0066CC;
        }

        #sidebar-wrapper {
            margin-left: -250px;
            top: 51px;
            left: 250px;
            width: 250px;
            background: #000;
            position: fixed;
            height: 100%;
            overflow-y: auto;
            z-index: 1000;
            transition: all 0.4s ease 0s;
        }

        #wrapper.active {
            padding-left: 0;
        }

        #wrapper.active #sidebar-wrapper {
            left: 0;
        }

        #page-content-wrapper {
            width: 100%;
            padding-top: 70px;
            transition: all 0.4s ease 0s;
        }

        .sidebar-nav {
            position: absolute;
            top: 0;
            width: 250px;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .sidebar-nav li {
            line-height: 40px;
            text-indent: 20px;
        }

        .sidebar-nav li button {
            color: #999999;
            display: block;
            text-decoration: none;
            padding-left: 60px;
        }
        .btn1
        {
            background-color: #0066CC;
            color: #FFFFFF;
            padding-right: 82px;
            border-radius: 3%;
            box-shadow: 3px 3px 2px 0 #ffffff;
            margin-bottom: 5px;
        }
        .btn2
        {     background-color: #0066CC;
            padding-right: 65px;
            border-radius: 3%;
            box-shadow: 3px 3px 2px 0 #ffffff;
            margin-bottom: 5px;
        }

        .btn3
        {
            background-color: #0066CC;
            padding-right: 108px;
            border-radius: 3%;
            box-shadow: 3px 3px 2px 0 #ffffff;
            margin-bottom: 5px;
        }

        .btn4
        {
            background-color: #0066CC;
            padding-right: 141px;
            border-radius: 3%;
            box-shadow: 3px 3px 2px 0 #ffffff;
            margin-bottom: 5px;
        }

        .sidebar-nav li button span:before {
            position: absolute;
            left: 0;
            color: #fffff;
            text-align: center;
            width: 20px;
            line-height: 18px;
        }

        .sidebar-nav li button:hover,
        .sidebar-nav li.active {
            color: #fff;
            background: rgba(255,255,255,0.2);
            text-decoration: none;
        }

        .sidebar-nav li button:active,
        .sidebar-nav li button:focus {
            text-decoration: none;
        }

        .sidebar-nav > .sidebar-brand {
            height: 65px;
            line-height: 60px;
            font-size: 18px;
        }

        .sidebar-nav > .sidebar-brand button {
            color: #999999;
        }

        .sidebar-nav > .sidebar-brand button:hover {
            color: #fff;
            background: none;
        }

        #menu-toggle {
            text-decoration: none;
            float: left;
            color: #fff;
            padding-right: 15px;
        }

        @media (max-width:767px) {

            #wrapper {
                padding-left: 0;
            }

            #sidebar-wrapper {
                left: 0;
            }

            #wrapper.active {
                position: relative;
                left: 250px;
            }

            #wrapper.active #sidebar-wrapper {
                left: 250px;
                width: 250px;
                transition: all 0.4s ease 0s;
            }

            #menu-toggle {
                display: inline-block;
            }
        }
    </style>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <div  class="navbar-brand">
                    <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                    </a>
                    <a href="index.php" style="color:white;">Digital Identity Platform</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand active">
                <a href="profile.php" id="username">
                </a>
            </li>
            <li>
                <a href="#instructions" data-toggle="pill">Instructions</a>
            </li>
            <li>
                <a href="#uploadA" data-toggle="pill">Upload Aadhar</a>
            </li>
            <li>
                <a href="#RN" data-toggle="pill">Register Your Phone</a>
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
                <a href="#SP" data-toggle="pill">Social Profile</a>
            </li>
            <li>
                <a href="#uploadDoc" data-toggle="pill">Upload Documents</a>
            </li>
            <li>
                <a href="#digitalCard" data-toggle="pill">Your Digital Identity</a>
            </li>
            <li>
                <a href="#signout" id="signout" data-toggle="pill">Logout</a>
            </li>
        </ul>
    </div>

    <!-- Page content --->

    <div class="tab-content" style="margin-top: 100px;">

        <div id="instructions" class="tab-pane fade in active">
            <?php include "instructions.php"?>
        </div>

        <div id="uploadA" class="tab-pane fade">
            <?php include "uploadAadhar.php"?>
        </div>

        <div id="RN" class="tab-pane fade">
            <?php include "registerPhone.php" ?>
        </div>

        <div id="PD" class="tab-pane fade">
            <?php include "personalDetails.php"?>
        </div>
        <div id="ED" class="tab-pane fade">
            <?php include "educationalDetails.php"?>
        </div>
        <div id="PDD" class="tab-pane fade">
            <?php include "professionalDetails.php"?>
        </div>
        <div id="SP" class="tab-pane fade">
            <?php include "socialProfle.php"?>
        </div>
        <div id="uploadDoc" class="tab-pane fade">
            <?php include "uploadDoc.php"?>
        </div>

        <div id="digitalCard" class="tab-pane fade">
            <?php include "generateCard.php"?>
        </div>
    </div>
</div>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
</script>
<script>
    var otp1;
    $(document).ready(function(){
        $("#wrapper").toggleClass("toggled");
        $('#receiveOTP').hide();
    });
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
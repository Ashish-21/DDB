<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>Upload Documents</title>
	<style media="screen">
	
	body{
		display: flex;
		min-height: 100vh;
		width: 100%;
		padding: 0;
		margin: 0;	
		align-items: center;
		justify-content: center;
		flex-direction: column;
	}

	#uploader{
		-webkit-appearance: none;	
		appearance: none;
		width: 50%;
		margin-bottom: 10px;
	}
	</style>
</head>
<body>
		<progress value="0" max="100" id="uploader">0%</progress>
		<input type="file" value="upload" id="fileButton" />
		<button type="button" id="downloadButton">download</button>



		<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
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

		  var user = firebase.auth().currentUser;
		   firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                console.log(user.displayName);
                var email = user.email;
                console.log(email);
            }
            else {
                
            }
        	});
		  

		  /*
		  var name;
		  var user = firebase.auth().currentUser;
		  firebase.auth().onAuthStateChanged(function(user) {
			  if (user) {
			    		name = user.displayName;
			  } else {
			    // No user is signed in.
			  }
			}); */



		  /*var user = firebase.auth().currentUser;
		  var name;
			if (user) {
			  // User is signed in.
			  console.log(user.displayName);
                $('#username').html(user.displayName);
                name = user.displayName;

			} else {
			  // No user is signed in.
			}*/
			/*var name, email, photoUrl, uid, emailVerified;
			if (user != null) {
				name = user.displayName;
				  email = user.email;
				  photoUrl = user.photoURL;
				  emailVerified = user.emailVerified;
				  uid = user.uid;
			 alert("User logged In");
			}*/

		  //get elements
		  var uploader = document.getElementById('uploader');
		  var fileButton = document.getElementById('fileButton');
		  
		  var storage = firebase.storage();

		  var downloadButton = document.getElementById('downloadButton');
		  var imgRef = storage.refFromURL('gs://signin-9768.appspot.com/Details/M573QegWMDB5H9fQ9br69TWF.jpg')
		  //var imgRef = storage.ref('Details/nullNew Doc 2017-09-29 (2)_13.jpg');
		  downloadButton.addEventListener('click', function(){
		  	imgRef.getDownloadURL().then(function(url){
		  		console.log("Download by this url");
		  		console.log(url);
		  	});
		  });


		  //file selection

		  fileButton.addEventListener('change',function(e){

		  	//getfile
		  	var file = e.target.files[0];

		  	//storageref
		  	var filename = email + file.name;
		  	var storageRef = firebase.storage().ref('Details/' + filename);

		  	//Uploadfile
		  	var task = storageRef.put(file);

		  	//progressbar updation
		  	task.on('state_changed',
		  		function progress(snapshot){
		  			var percentage = (snapshot.bytesTransferred / 
		  			snapshot.totalBytes) * 100;
		  			uploader.value = percentage;
		  			console.log('err');
		  		},

		  		function error(err){
		  		
		  		},

		  		function complete(){

		  		}
		  		);
		  });
		</script>
</body>
</html>
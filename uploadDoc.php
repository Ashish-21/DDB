<html xmlns:text-algin="http://www.w3.org/1999/xhtml" xmlns:text-align="http://www.w3.org/1999/xhtml">
<head>
    <title>
        DIP
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #targetLayer{
            float:left;
            width:350px;
            height:250px;
            margin-right: 100px;
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
            width:450px;
            height:250px;
            margin-right: 50px;
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading"><center>Upload Documents</center></div>
        <div class="panel-body">
            <div class="fluid-container">

                <div class="row">
                    <h5>Photo</h5>
                    <div id="targetLayer">No Image</div>
                    <form id="uploadForm">
                        <label>Upload Image File:</label><br/>
                        <input name="userImage" type="file" class="inputFile" required/>
                        <input type="submit" id="uploadButton" value="Submit" class="btn btn-primary btn-lg" data-loading-text="Uploading File..." />
                    </form>
                </div>
                <hr style="height:1px;border:none;color:#333;background-color: blue;">
                <div class="row">
                    <form id="uploadForm">
                        <label>Pancard</label><br/>
                        <input name="userImage" type="file" class="inputFile" required/>
                        <input type="submit" id="uploadButton" value="Submit" class="btn btn-primary btn-lg" data-loading-text="Uploading File..." />
                    </form>
                </div>

                <hr style="height:1px;border:none;color:#333;background-color: blue;">
                <div class="row">
                    <h5></h5>
                    <form id="uploadForm">
                        <label>Bank Bassbook</label><br/>
                        <input name="userImage" type="file" class="inputFile" required/>
                        <input type="submit" id="uploadButton" value="Submit" class="btn btn-primary btn-lg" data-loading-text="Uploading File..." />
                    </form>
                </div>
                <hr style="height:1px;border:none;color:#333;background-color: blue;">
                <div class="row">
                    <form id="uploadForm">
                        <label>Ration Card</label><br/>
                        <input name="userImage" type="file" class="inputFile" required/>
                        <input type="submit" id="uploadButton" value="Submit" class="btn btn-primary btn-lg" data-loading-text="Uploading File..." />
                    </form>
                </div>
                <hr style="height:1px;border:none;color:#333;background-color: blue;">
                <div class="row">
                    <form id="uploadForm">
                        <label>Driving License</label><br/>
                        <input name="userImage" type="file" class="inputFile" required/>
                        <input type="submit" id="uploadButton" value="Submit" class="btn btn-primary btn-lg" data-loading-text="Uploading File..." />
                    </form>
                </div>
                <hr style="height:1px;border:none;color:#333;background-color: blue;">
                <div class="row">
                    <form id="uploadForm">
                        <label>Birth Certificate</label><br/>
                        <input name="userImage" type="file" class="inputFile" required/>
                        <input type="submit" id="uploadButton" value="Submit" class="btn btn-primary btn-lg" data-loading-text="Uploading File..." />
                    </form>
                </div>
                <hr style="height:1px;border:none;color:#333;background-color: blue;">
                <div class="row">
                    <form id="uploadForm">
                        <label>Income Certificate</label><br/>
                        <input name="userImage" type="file" class="inputFile" required/>
                        <input type="submit" id="uploadButton" value="Submit" class="btn btn-primary btn-lg" data-loading-text="Uploading File..." />
                    </form>
                </div>


                <hr style="height:1px;border:none;color:#333;background-color: blue;">
                <div class="row">
                    <form id="uploadForm">
                        <label>SSC Marksheet</label><br/>
                        <input name="userImage" type="file" class="inputFile" required/>
                        <input type="submit" id="uploadButton" value="Submit" class="btn btn-primary btn-lg" data-loading-text="Uploading File..." />
                    </form>
                </div>

                <hr style="height:1px;border:none;color:#333;background-color: blue;">
                <div class="row">
                    <form id="uploadForm">
                        <label>HSC Marksheet</label><br/>
                        <input name="userImage" type="file" class="inputFile" required/>
                        <input type="submit" id="uploadButton" value="Submit" class="btn btn-primary btn-lg" data-loading-text="Uploading File..." />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
</script>
</body>
</html>
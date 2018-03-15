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
    #loader {
        bottom: 0;
        height: 175px;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
        width: 175px;
    }
    #loader {
        bottom: 0;
        height: 175px;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
        width: 175px;
    }
    #loader .dot {
        bottom: 0;
        height: 100%;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
        width: 87.5px;
    }
    #loader .dot::before {
        border-radius: 100%;
        content: "";
        height: 87.5px;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transform: scale(0);
        width: 87.5px;
    }
    #loader .dot:nth-child(7n+1) {
        transform: rotate(45deg);
    }
    #loader .dot:nth-child(7n+1)::before {
        animation: 0.8s linear 0.1s normal none infinite running load;
        background: #00ff80 none repeat scroll 0 0;
    }
    #loader .dot:nth-child(7n+2) {
        transform: rotate(90deg);
    }
    #loader .dot:nth-child(7n+2)::before {
        animation: 0.8s linear 0.2s normal none infinite running load;
        background: #00ffea none repeat scroll 0 0;
    }
    #loader .dot:nth-child(7n+3) {
        transform: rotate(135deg);
    }
    #loader .dot:nth-child(7n+3)::before {
        animation: 0.8s linear 0.3s normal none infinite running load;
        background: #00aaff none repeat scroll 0 0;
    }
    #loader .dot:nth-child(7n+4) {
        transform: rotate(180deg);
    }
    #loader .dot:nth-child(7n+4)::before {
        animation: 0.8s linear 0.4s normal none infinite running load;
        background: #0040ff none repeat scroll 0 0;
    }
    #loader .dot:nth-child(7n+5) {
        transform: rotate(225deg);
    }
    #loader .dot:nth-child(7n+5)::before {
        animation: 0.8s linear 0.5s normal none infinite running load;
        background: #2a00ff none repeat scroll 0 0;
    }
    #loader .dot:nth-child(7n+6) {
        transform: rotate(270deg);
    }
    #loader .dot:nth-child(7n+6)::before {
        animation: 0.8s linear 0.6s normal none infinite running load;
        background: #9500ff none repeat scroll 0 0;
    }
    #loader .dot:nth-child(7n+7) {
        transform: rotate(315deg);
    }
    #loader .dot:nth-child(7n+7)::before {
        animation: 0.8s linear 0.7s normal none infinite running load;
        background: magenta none repeat scroll 0 0;
    }
    #loader .dot:nth-child(7n+8) {
        transform: rotate(360deg);
    }
    #loader .dot:nth-child(7n+8)::before {
        animation: 0.8s linear 0.8s normal none infinite running load;
        background: #ff0095 none repeat scroll 0 0;
    }
    #loader .lading {
        background-image: url("../images/loading.gif");
        background-position: 50% 50%;
        background-repeat: no-repeat;
        bottom: -40px;
        height: 20px;
        left: 0;
        position: absolute;
        right: 0;
        width: 180px;
    }
    @keyframes load {
        100% {
            opacity: 0;
            transform: scale(1);
        }
    }
    @keyframes load {
        100% {
            opacity: 0;
            transform: scale(1);
        }
    }

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
        <div class="panel-heading"><center>Upload Your Aadhar</center></div>
        <div class="panel-body">
            <div class="fluid-container">
                <div id="targetLayer">No Image</div>
                <form id="uploadForm">
                    <label>Upload Image File:</label><br/>
                    <input name="userImage" type="file" class="inputFile" required/>
                    <input type="submit" id="uploadButton" value="Submit" class="btn btn-primary btn-lg" />
                </form>
                <p id="firstname"></p>
                <p id="dob"></p>
                <p id="gender"></p>
            </div>
        </div>
    </div>
</div>

<div class="row" id="wait" style="display: none;">
    <div id="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="lading"></div>
    </div>
</div>
<script>


    $("#uploadForm").on('submit',(function(e) {
        e.preventDefault();
        $('#uploadButton').attr('value','Please Wait...');
        $("#wait").css("display", "block");
        var formdata=new FormData(this);
        formdata.append("apikey","22c4fed54588957");
        formdata.append("isOverlayRequired", false);
        $.ajax({
            url: "https://api.ocr.space/parse/image",
            type: "POST",
            dataType:"json",
            data:  formdata,
            contentType: false,
            processData:false,
            success: function(data)
            {
                var name=data.ParsedResults[0].ParsedText;
                $('#uploadButton').attr('value','Submit');
                $("#wait").css("display", "none");
                var onlyName=name.split(" ");
                console.log(onlyName);
                $('#firstname').empty();
                $('#dob').empty();
                $('#gender').empty();
                $('#firstname').append(onlyName[0]+" "+onlyName[1]+" "+onlyName[2]);
                $('#dob').append(onlyName[4]);
                $('#gender').append(onlyName[6]);
            },
            error: function()
            {
                console.log("Error");
            }
        });
        $.ajax({
            url: "upload.php",
            type: "POST",
            data:  formdata,
            contentType: false,
            processData:false,
            success: function(data)
            {
                console.log(data);
                $("#targetLayer").html(data);
            },
            error: function()
            {
                console.log("Error");
            }
        });
    }));
</script>
</body>
</html>
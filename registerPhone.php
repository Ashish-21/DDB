<html xmlns:text-algin="http://www.w3.org/1999/xhtml" xmlns:text-align="http://www.w3.org/1999/xhtml">
<head>
    <title>
        DIP
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading"><center>Register Your Number</center></div>
        <div class="panel-body">
            <div class="fluid-container">
                <form id="registerPhone">
                    <label>Register Your Number:</label>
                    <input type="number" id="phone" name="phone" required>
                    <input type="submit" value="Register" class="btnSubmit">
                </form>

                <div id="receiveOTP">
                    <form id="receiveotp">
                        <label>Enter OTP:</label>
                        <input type="number" id="otp" name="otp">
                        <input type="submit" class="btnSubmit" id="otpVerify">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#registerPhone').on('submit',function (event) {
        event.preventDefault();
        var phoneNumber=$('#phone').val();
        var formdata=new FormData(this);
        $.ajax(
            {
                url:"sendSMS.php",
                type:"POST",
                data:formdata,
                contentType:false,
                processData:false,
                success:function(data)
                {
                    console.log(data);
                    var data1=JSON.parse(data);
                    otp1=data1[1];
                    $('#receiveOTP').show();
                },
                error:function()
                {
                    console.log("Error");
                }

            }
        );
    });
    $('#otpVerify').click(function(e)
    {
        e.preventDefault();
        var serverOTP=otp1;
        var clientOTP=$("#otp").val();
        processOTP(clientOTP,serverOTP)
    });
    function processOTP(otp,otp1)
    {
        if(otp==otp1)
        {
            alert("Sucessfully Registered Your Number!");
        }
        else
        {
            alert("Incorrect OTP,Try Again!");
        }
    }
</script>
</body>
</html>
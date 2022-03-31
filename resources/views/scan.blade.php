<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="image/icon.png" rel="shortcut icon"> <!-- icon tab browser -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'> -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <title>Ecotech</title>
    <style>
        
        body{
            /* background-color:#E5E5E5; */
        }
        .container{
            padding:3%;
            /* border:solid black 1px; */
            /* padding-top:3%;
            padding-left:5%; */
        }
        p{
            font-family:'Nunito';
            margin-block-start:0em;
            margin-block-end:5px;
            font-weight:bold;
        }
        span, a, button, #reader__camera_selection, #reader__header_message{
            font-family:'Nunito';
        }
        /* #reader{
            border: solid #6C757D 2px;
        } */
        #qr-shaded-region{
            /* display:none; */
        }
        #reader__scan_region img{
            padding-top:4%;
            width:11%;
        }
    </style>
</head>
<body>
    <div class="container">
        <p style="font-size:24px; color:##343A40; margin-bottom:2%">Scan ATM</p>
        <p style="font-size:16px; margin-bottom:1%; color:#6C757D">Scan to Login to ATM</p>
        <div style="border-radius:5px; height:350px; background-color:#D1D1D1" id="reader" width="600px"></div>
    </div>
</body>
</html>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        console.log(`Code matched = ${decodedText}`, decodedResult);
        alert("nnti dulu ya ges ya, mo bobo dulu:D");
        }

        function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning.
        // for example:
        console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader",
        { fps: 10, qrbox: {width: 250, height: 250} },
        /* verbose= */ false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
    <style>
        img{
            width:100px;
        }
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM-QR Code</title>

    <link href="image/icon.png" rel="shortcut icon"> <!-- icon tab browser -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/atmstyle.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/atmstyle.css') }}"> -->
</head>
<body>
    <div class="container bg2">
        <img style="padding-top:3%" class="headerLogo" src="{{url('/image/logoBesar.png')}}">
        <div class="content-menu">
            <!-- isinya text, barcode -->
            <p style="margin-top:4.1vw; font-size:3vw; font-weight:bold; color:#343A40">QR Code</p>
            <p style="font-size:2vw; font-weight:bold; color:#6C757D; margin-top:1vw; margin-bottom:3vw">scan the qr code below through the website and your smartphone!️</p>
            {!! QrCode::size(180)->generate('MXx1obO9oez0eM0nvLK1cHenOmHpdUtsAwr8d5S3qSkKYIiRGCWry8B44RbjfA9uMcGrzJtlRPycXu9inAMFDU6iYLI7jqaSL');!!}
        </div>
        <a href="atm-menu"><button class="red">Back</button></a>
    </div>
</body>
</html>
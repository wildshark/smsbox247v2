<!DOCTYPE html>

<html>

<head>

    <title>Capture webcam image with php and jquery - ItSolutionStuff.com</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <style type="text/css">

        #results { padding:20px; border:1px solid; background:#ccc; }

    </style>

</head>

<body>

  

<div >

    <h1 >Capture webcam image with php and jquery - ItSolutionStuff.com</h1>

   

    <form method="POST" action="storeImage.php">

        <div >

            <div >

                <div id="my_camera"></div>

                <br/>

                <input type=button value="Take Snapshot" onClick="take_snapshot()">

                <input type="hidden" name="image" >

            </div>

            <div >

                <div id="results">Your captured image will appear here...</div>

            </div>

            <div >

                <br/>

                <button >Submit</button>

            </div>

        </div>

    </form>

</div>

  

<!-- Configure a few settings and attach camera -->

<script language="JavaScript">

    Webcam.set({

        width: 490,

        height: 390,

        image_format: 'jpeg',

        jpeg_quality: 90

    });

  

    Webcam.attach( '#my_camera' );

  

    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

        } );

    }

</script>

 

</body>

</html>

<?php

    

    $img = $_POST['image'];

    $folderPath = "upload/";

  

    $image_parts = explode(";base64,", $img);

    $image_type_aux = explode("image/", $image_parts[0]);

    $image_type = $image_type_aux[1];

  

    $image_base64 = base64_decode($image_parts[1]);

    $fileName = uniqid() . '.png';

  

    $file = $folderPath . $fileName;

    file_put_contents($file, $image_base64);

  

    print_r($fileName);

  

?>


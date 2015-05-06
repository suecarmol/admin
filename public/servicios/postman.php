<?php

$url = 'http://batch.geocoder.cit.api.here.com/6.2/jobs/Pmv8IULO4HCMb5Yhf6D9tpiuCYJJZgkB/'.
    'all?app_code=bDsF80_TmRgKywxQlXFgTg&app_id=xKm59owTXnvSZ5zyQdXN';

$path = 'zip/';

$fp = fopen($path, 'w');

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FILE, $fp);

$data = curl_exec($ch);



if (curl_errno($ch)) {
    // this would be your first hint that something went wrong
    die('Couldn\'t send request: ' . curl_error($ch));
} else {
    // check the HTTP status code of the request
    $resultStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($resultStatus == 200) {
        // everything went better than expected
        echo "<br/>Si el código es 200 -> Success!!!";
    } else {
        // the request did not complete as expected. common errors are 4xx
        // (not found, bad request, etc.) and 5xx (usually concerning
        // errors/exceptions in the remote script execution)
        //echo '<script>console.log("'.$objectData.'")</script>';
        echo '<br/><h1>Error</h1><br/><br/>';
        echo $response.'<br/>';

        die('Request failed: HTTP status code: ' . $resultStatus);

    }
}

curl_close($ch);
fclose($fp);

/*
$headers = array(
    "Content-Type: application/json",
    "X-Parse-Application-Id: " . $appId,
    "X-Parse-REST-API-Key: " . $restKey
);*/
/////$rest = curl_init();
////curl_setopt($rest,CURLOPT_URL,$url);


//echo 'Objeto:       '.$objectData.'<br/><br/><br/>';

 //curl_setopt($rest,CURLOPT_PUT,1);
/*
curl_setopt($rest, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($rest,CURLOPT_POSTFIELDS,$objectData);
curl_setopt($rest,CURLOPT_HTTPHEADER,$headers);
curl_setopt($rest,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($rest,CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($rest);
echo $response.'<br/>';
print_r($response);*/

/*
if (curl_errno($rest)) {
    // this would be your first hint that something went wrong
    die('Couldn\'t send request: ' . curl_error($rest));
} else {
    // check the HTTP status code of the request
    $resultStatus = curl_getinfo($rest, CURLINFO_HTTP_CODE);
    //echo "<br/><h1>".$resultStatus."</h1><br/>";
    //echo '<script>console.log("'.$resultStatus.'")</script>';
    if ($resultStatus == 200) {
        // everything went better than expected
        echo "<br/>Si el código es 200 -> Success!!!";
        //ob_start();
        //header('Location: ../restaurantes.php');
        //exit();
        //echo '<br/><br/><a href="../restaurantes.php">Regresar</a>';
    } else {
        // the request did not complete as expected. common errors are 4xx
        // (not found, bad request, etc.) and 5xx (usually concerning
        // errors/exceptions in the remote script execution)
        //echo '<script>console.log("'.$objectData.'")</script>';
        echo '<br/><h1>Error</h1><br/><br/>';
        echo 'Objeto:       '.$objectData.'<br/><br/><br/>';
        echo '<br/><br/><a href="../restaurantes.php">Regresar</a><br/><br/>';
        echo $response.'<br/>';

        die('Request failed: HTTP status code: ' . $resultStatus);

   }
}

curl_close($rest);*/

?>
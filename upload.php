<?php
require 'db.php';
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = 'system101'; // use 'sandbox' for development in the test environment
$apiKey   = 'd7bd20e85bef94a2988719242906702d946e9767d707b10fac8063273b08cf84'; // use your sandbox app API key for development in the test environment
$AT       = new AfricasTalking($username, $apiKey);

// Get one of the services
$sms      = $AT->sms();

// Use the service

if (isset($_FILES["fileToUpload"]))
{
//"1212","ahmedbare@gmail.com","phone","names"
    $target_dir = "uploads/";
    $date=date("y_m_d_h_i_s");
    $target_file = $target_dir .$date. basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $file = fopen($target_file, "r");
        while (!feof($file)){
            $row = fgetcsv($file);
            $id =   $row[0];
            $president = $row[1];
            $library=$row[2];
            $catering=$row[3];
            $sports=$row[4];
            $female_hostels=$row[5];
            $male_hostels=$row[6];
            /*$phone = $row[2];
            $names = $row[1];*/
            $pass=rand(10000,40000);


            //TODO send the password via sms
            //africastalking.com
            $password = crypt($pass,'nvjnvjnvjnv');
            $sql ="INSERT INTO `candidates`('id'`president`, `library`, `catering`, `sports`, 'female_hostels', 'male_hostels') 
                                  VALUES (null '$president','$library','$catering','$sports', '$female_hostels', 'male_hostels')";
            mysqli_query($conn, $sql);



            /*$result   = $sms->send([
                "to"     => "$phone",
                "message" => "$pass"
            ]);*/
        }

    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <title>Add students</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">



            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Admission:</label>
                    <input type="file" class="form-control" name="fileToUpload" required placeholder="Students CSV">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Upload File</button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
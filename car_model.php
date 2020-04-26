/** 
The code below fetches data from the inbuilt wordpress database by making use of wpdb class.
Here we made use of prepare statements as a preventive measure against sql injection

*/

<?php

$path = $_SERVER['DOCUMENT_ROOT']; // this is included so that wpdb class can be accessed outside wordpress content folder. As all the 
				  // custom pages are included outside wordpress content folder.

include_once $path . '/wp-config.php';
include_once $path . '/wp-load.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';

global $wpdb;

if (isset($_POST["final_submit"]))

{
         $Year = $_POST['car_year'];
         $Make = $_POST['car_brand'];
         $Model = $_POST['car_model'];
         $x =$wpdb->get_var($wpdb->prepare("SELECT FuelLifeCycleCO2 FROM wp_car_models WHERE Year = %d AND Brand = %s AND Model=%s ",$Year,$Make,$Model));

         if ($x !=0){
         echo "<script>alert('Your car's emission is ' + $x + ' gms/km');</script>";}
	elseif ($x==0){
         echo "<script>alert($x);</script>";
}
}
?>





<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zer0Carbon_CarModel_Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="height: 643px;padding: 0px;width: 350px;">
    <div data-bs-parallax-bg="true" style="height: 400px;background-image: url(&quot;assets/img/Car_Emmission_Mirrored.jpg&quot;);background-position: center;background-size: cover;width: 1600px;">
        <div></div>
        <p style="height: 160px;"></p>
        <div style="background-position: center;">
            <p style="width: 1000px;color: rgb(255,255,255);font-size: 46px;margin: 0px;height: 105px;background-position: top;font-family: Bitter, serif;">&nbsp; CO2 Calculator for your car model</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="https://zer0carb0n.me" style="font-size: 30px;color: rgb(255,255,255);"><i class="fa fa-long-arrow-left" style="color: #ffffff;font-size: 37px;width: 49px;"></i>RETURN</a></p>
        </div>
    </div>
    <div class="table-responsive table-borderless text-right" style="width: 1200px;background-repeat: round;">
        <table class="table table-bordered">
            <thead>
                <tr></tr>
            </thead>
            <tbody>
                <tr style="width: 1500px;">
                    <td class="text-center" style="width: 1200px;font-size: 28px;"><br></td>
                    <td class="text-left" style="width: 500px;font-size: 24px;height: 48px;"><strong>FIND CO2 EMMISSION OF YOUR CAR</strong></td>
                    <td class="text-center" style="width: 177px;font-size: 28px;"><br></td>
                </tr>
                <tr>
                    <td data-bs-hover-animate="bounce" style="min-width: 0px;width: 8000px;padding: 10px;color: rgba(33,37,41,0);"></td>
                    <td class="text-left" style="width: 400px;">
                        <form  method="POST" style="width: 600px;padding: 0px;">
                            <fieldset style="height: 0px;width: 750px;"></fieldset>
                            <fieldset id="car-transport"><label style="padding: 8px;height: 0px;"><strong>Enter The Car Year Model</strong></label><input class="form-control" type="text" name="car_year" data-bs-hover-animate="pulse" placeholder="e.g : 2020" style="height: 40px;padding: 7px;width: 400px;margin: 7px;"
                                    required="" minlength="4" maxlength="4"><label style="padding: 8px;height: 27px;"><strong>Enter The Make of your Car&nbsp;</strong></label><input class="form-control" type="text" name="car_brand" data-bs-hover-animate="pulse" placeholder="e.g: Ford"
                                    style="height: 40px;padding: 7px;width: 400px;margin: 7px;" required="" minlength="1" maxlength="50"><label style="padding: 9px;margin: 0px;height: 23px;"><strong>Enter The Model of your Car</strong></label><input class="form-control"
                                    type="text" name="car_model" data-bs-hover-animate="pulse" style="width: 400px;height: 40px;margin: 7px;" placeholder="e.g : Focus" required="" maxlength="50" minlength="1"></fieldset>
                            <div><input type="submit" value="CALCULATE" name="final_submit" id="final_submit" style="width: 400px;background-color: rgb(13,157,61);font-size: 18px;height: 39px;padding: 4px;margin: 7px;">
</div>
                        </form>
                    </td>
                    <td style="width: 1200px;"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/zer0carb0n.js"></script>
</body>

</html>

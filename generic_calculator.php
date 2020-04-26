<?php
if (isset($_POST["final_submit"]))
{

                
                                $elec_footprint = $_POST['electricity_units']*1.17;
				$car_fuel_used = $_POST['mileage'] * ($_POST['car_distance']/100);
				$car_footprint = $car_fuel_used * 2.3 ;
				$train_footprint = $_POST['train_distance'] * .21 ;
				$bus_footprint = $_POST['bus_distance'] * .22 ;
				$tram_footprint = $_POST['train_distance'] * .20;
                $final_result = $elec_footprint + $car_footprint + $train_footprint + $bus_footprint + $tram_footprint;
                echo "<script>alert('Your Total Carbon Footprint : ' + $final_result);</script>";

}

?>








<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>zer0Carbon_Calculator</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="height: 643px;padding: 0px;width: 350px;">
    <div data-bs-parallax-bg="true" style="height: 400px;background-image: url(&quot;assets/img/187414-avallonist.jpg&quot;);background-position: center;background-size: cover;width: 1600px;">
        <div></div>
        <p style="height: 160px;">Paragraph</p>
        <div style="background-position: center;">
            <p style="width: 1000px;color: rgb(255,255,255);font-size: 70px;margin: 0px;height: 105px;background-position: top;font-family: Bitter, serif;">&nbsp; Carb0n Calculator</p>
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
                    <td class="text-left" style="width: 500px;font-size: 27px;"><strong>FIND YOUR CARBON FOOTPRINT</strong></td>
                    <td class="text-center" style="width: 177px;font-size: 28px;"><br></td>
                </tr>
                <tr>
                    <td data-bs-hover-animate="bounce" style="min-width: 0px;width: 8000px;padding: 10px;color: rgba(33,37,41,0);"></td>
                    <td class="text-left" style="width: 400px;">
                        <div style="width: 600px;">
                            <ul class="nav nav-tabs" style="width: 400px;">
                                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Electricity<i class="fas fa-bolt" style="margin: 5px;height: 15px;color: rgb(23,104,198);font-size: 18px;"></i></a></li>
                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Transport<i class="fa fa-car" style="margin: 6px;font-size: 18px;"></i></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">
                                    <form method="POST" style="width: 600px;padding: 0px;">
                                        <div class="form-group"><label><strong>Enter your monthly electricity consumption</strong></label><input class="form-control" type="text" name ="electricity_units" data-bs-hover-animate="pulse" placeholder="In Kwh" inputmode="numeric" style="width: 400px;" minlength="1"
                                                maxlength="5"></div>
                                    
                                    <p style="padding: 4px;color: rgb(7,160,13);">Navigate to Transport tab to continue</p>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-2" style="width: 500px;">
                                    <div class="form-group">
                                                                                    <div class="table-responsive" style="height: 41px;width: 400px;">
                                                <table class="table">
                                                    <thead>
                                                        <tr></tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="height: 36px;">
                                                            <td style="width: 92px;">
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" name="car-check" data-bs-hover-animate="pulse" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Car</label></div>
                                                            </td>
                                                            <td style="width: 165px;">
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" name="public-check" data-bs-hover-animate="pulse" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Public Transport</label></div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <p style="font-size: 14px;padding: 2px;height: 16px;width: 350px;">Choose one or more options.</p>
                                            <fieldset style="height: 0px;width: 750px;"></fieldset>
                                            <fieldset id="car-transport">
												
												
												 <div class="car-info" style="display:none">
												
                                                <legend style="height: 40px;padding: 6px;">Car<i class="fa fa-car" style="margin: 6px;background-color: #ffffff;color: rgb(162,8,33);"></i></legend><label style="padding: 8px;height: 0px;"><strong>Input the milage of your car</strong></label>
                                                <input
                                                    class="form-control" type="text" data-bs-hover-animate="pulse" name="mileage" placeholder="in Liters/100 kms" style="height: 40px;padding: 7px;width: 400px;margin: 7px;"><label style="padding: 8px;height: 27px;"><strong>Average distance that you travel by your car</strong></label><input class="form-control" type="text" name="car_distance" data-bs-hover-animate="pulse" placeholder="in Kms" style="height: 40px;padding: 7px;width: 400px;margin: 7px;"></fieldset>
													
												</div>	
													
													<div class="publictransport-info" style="display:none">	
													
                                            <fieldset
                                                id="public-transport">
                                                <legend style="padding: 7px;">Public Transport<i class="fa fa-train" style="color: rgb(194,98,29);margin: 6px;font-size: 28px;"></i></legend><label style="height: 0px;padding: 6px;"><strong>Your preferred public transport option</strong></label>
                                                <div
                                                    class="table-responsive" style="height: 41px;padding: 1px;opacity: 1;width: 400px;">
                                                    <table class="table">
                                                        <thead>
                                                            <tr></tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr></tr>
                                                            <tr>
                                                                <td style="width: 148px;">
                                                                    <div class="form-check"><input class="form-check-input" type="checkbox" name="public-train" data-bs-hover-animate="pulse" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Train</label></div>
                                                                </td>
                                                                <td style="width: 156px;">
                                                                    <div class="form-check"><input class="form-check-input" type="checkbox" name="public-bus" data-bs-hover-animate="pulse" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Bus</label></div>
                                                                </td>
                                                                <td style="width: 103px;">
                                                                    <div class="form-check"><input class="form-check-input" type="checkbox" name="public-tram" data-bs-hover-animate="pulse" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Tram</label></div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                    </div>
                                    <p style="font-size: 14px;padding: 7px;height: 7px;">Choose one or more options.</p>
									
									
									
									<div class="publictransport-train" style="display:none">	
									
									<label style="padding: 9px;margin: 0px;height: 23px;"><strong>Average distance travelled by Train?</strong></label><input class="form-control" type="text" name="train_distance" data-bs-hover-animate="pulse"
                                        style="width: 400px;height: 40px;margin: 7px;" placeholder="in Kms">
										
									</div>
									
									
									
									<div class="publictransport-bus" style="display:none">		
										
									<label style="padding: 9px;margin: 0px;height: 23px;width: 400px;"><strong>Average distance travelled by Bus?</strong></label><input class="form-control"
                                        type="text" name="bus_distance" data-bs-hover-animate="pulse" style="width: 400px;height: 40px;margin: 7px;" placeholder="in Kms">
										
									</div>	
									
									
										
									<div class="publictransport-tram" style="display:none">	
											
									<label style="padding: 9px;margin: 0px;height: 23px;"><strong>Average distance travelled by Tram?</strong></label>
                                    <input
                                        class="form-control" type="text" name="tram_distance" data-bs-hover-animate="pulse" style="width: 400px;height: 40px;margin: 7px;" placeholder="in Kms"></fieldset>
									</div>
									
									</div>
										
										
										<!--
                                        <div><button class="btn btn-primary" type="button" style="width: 400px;background-color: rgb(13,157,61);font-size: 18px;height: 39px;padding: 4px;margin: 7px;">CALCULATE</button></div>
                                         -->
										 
										 
										 <input type="submit" value="CALCULATE" name="final_submit" id="final_submit" style="width: 400px;background-color: rgb(13,157,61);font-size: 18px;height: 39px;padding: 4px;margin: 7px;">
										
										</form>
                                </div>
                            </div>
                        </div>
    </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('input[name=car-check]').on("click",function(){
      if ($(this).is(':checked')) {
          $(".car-info").show();               
      } else {
          $(".car-info").hide();               
      }	  
  });
  $('input[name=public-check]').on("click",function(){
      if ($(this).is(':checked')) {
         $(".publictransport-info").show();           
      } else {
         $(".publictransport-info").hide();         
      }	  
  });
  $('input[name=public-train]').on("click",function(){
      if ($(this).is(':checked')) {
         $(".publictransport-train").show();           
      } else {
         $(".publictransport-train").hide();         
      }	  
  });
  $('input[name=public-bus]').on("click",function(){
      if ($(this).is(':checked')) {
         $(".publictransport-bus").show();           
      } else {
         $(".publictransport-bus").hide();         
      }	  
  });
  $('input[name=public-tram]').on("click",function(){
      if ($(this).is(':checked')) {
         $(".publictransport-tram").show();           
      } else {
         $(".publictransport-tram").hide();         
      }	  
  });
  
});


</script>

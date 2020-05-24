/**
This php file serves as an endpoint to the ajax request. This page first extract the request parameters and use them to fetch data from 
the database using parametrized queries. Further, this data is sent as a response in html format, that is, in HTML's option tag
*/

<?php

$path = $_SERVER['DOCUMENT_ROOT']; # this is needed as this page is hosted outside wordpress but under the same domain.

include_once $path . '/wp-config.php';
include_once $path . '/wp-load.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';

global $wpdb;


if(!empty($_POST["year"]))
{

$id = $_POST['year'];
$results =$wpdb->get_results($wpdb->prepare("SELECT DISTINCT Brand FROM wp_car_models WHERE Year = %d",$id));
 
        echo "<option value=''>Select Car Brand</option>"; 
        foreach($results as $r){  
            echo "<option value='$r->Brand'>$r->Brand</option>"; 
        } 
    }
    
elseif(isset($_POST["brand"]))

{

 $yr = $_POST['yr'];
 $Brand = $_POST['brand'];
 $results =$wpdb->get_results($wpdb->prepare("SELECT Model FROM wp_car_models WHERE Year= %d AND Brand=%s",$yr,$Brand));
   
        echo "<option value=''>Select Car Model</option>"; 
        foreach($results as $r){  
            echo "<option value='$r->Model'>$r->Model</option>"; 
        } 
   } 
?>

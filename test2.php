<?php
$path = $_SERVER['DOCUMENT_ROOT'];

include_once $path . '/wp-config.php';
include_once $path . '/wp-load.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';

global $wpdb;

         $Year = $_POST['car_year'];
         $Make = $_POST['car_make'];
         $Model = $_POST['car_model'];
         $x =$wpdb->get_var($wpdb->prepare("SELECT FuelLifeCycleCO2 FROM wp_car_models WHERE Year = %d AND Brand = %s AND Model=%s ",$Year,$Make,$Model));
echo $x;

?>

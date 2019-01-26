<?php
session_start();
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //fetching data from App




     $value = validate($_POST["value"]);
    
    $con = con();
    

if($value=="1")
{
    $query = "SELECT city_name FROM city";
     $resultArray = $con->query($query);
 
 $row[]=array();
  while($row = $resultArray ->fetch_array();)
                           {
                            echo $row;
                           }
                           
    
    // echo $JSON;
}
else if($value=="2")
{
    $city = validate($_POST["city_name"]);

    $query = "SELECT event_name FROM city where city_name='$city'";
     $resultArray = $con->query($query);

     $JSON=json_encode($resultArray);

     echo $JSON;


}
else if($value=="3")
{
    $event = validate($_POST["event_name"]);

    $query = "SELECT area_pincode FROM city where event_name='$city'";
     $resultArray = $con->query($query);

     $JSON=json_encode($resultArray);

     echo $JSON;


}
 
   
//57b60c02ae9b4ca2bd4cc7bc8a344d8c  
    
}
?>
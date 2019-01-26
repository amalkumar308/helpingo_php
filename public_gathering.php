<?php
session_start();
require('function.php');

    date_default_timezone_set('Asia/Kolkata');
    //fetching data from App
     /*$mobile = validate($_POST["mobile"]);
    $region = validate($_POST["region"]);
     $situation_type = validate($_POST["situation_type"]);
    $types_of_problem = validate($_POST["types_of_problem"]);
     $situatuin_status = validate($_POST["situation_status"]);
     $date = date("d/m/Y");
     $time = date("H:i");*/

     $mobile = "8596485231";
    $region = "sector1";
     $situation_type = "4";
    $types_of_problem = "fire";
     $situatuin_status = "critical";
     $date = date("d/m/Y");
     $time = date("H:i");
    $con = con();
    
    
 //echo $mobile;
   
$query = "SELECT * FROM public_gathering WHERE region='$region'";

    
    $result = $con->query($query);
echo $result->num_rows;
    if($result->num_rows>3)
    {
        echo "this entry is allrady done";
        die();
    }
    else
    {
        echo $mobile;
        $ins_query = "INSERT INTO public_gathering (mobile,region,situation_type,types_of_problem,situation_stetus,date1,time1)
        VALUES ('$mobile','$region','$situation_type','$types_of_problem','$types_of_problem','$situatuin_status','$date','$time')";
        $ins_res = $con->query($ins_query);
        
        echo "your entry is successfull and if yor information is right you got 100rs paytm cash.
        if your info is find as a intertaintement purpus then you will be penalty of 100rs";
       
        die(); 
}  
    


    



?>
<?php

require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    date_default_timezone_set('Asia/Kolkata');
    //fetching data from App
     $mobile = validate($_POST["mobile"]);
    $region = validate($_POST["region"]);
     $situation_type = validate($_POST["situation_type"]);
    $types_of_problem = validate($_POST["types_of_problem"]);
     $situatuin_status = validate($_POST["situation_status"]);
     $nearest_area = validate($_POST["nearest_area"]); 
     $date = date("d/m/Y");
     $time = date("H:i");

   /*  $mobile = "8596485231";
    $region = "sector1";
     $situation_type = "4";
    $types_of_problem = "fire"; 
     $situatuin_status = "critical";
     $date = date("d/m/Y");
     $time = date("H:i");*/

    $con = con();
    
    
 //echo $mobile;
   
$query = "SELECT * FROM daley_incident WHERE region='$region' and mobile<>'$mobile' and date1='$date'" ;

   // $query = "SELECT mobile_no FROM public_reg";
     
   //$result = $con->query($query);
    $result=mysqli_query($con, $query);

  

    if($result->num_rows>3)
    {
        echo "this entry is allrady done";
        die();
    }
    else
    {
        echo $mobile;
        $ins_query = "INSERT INTO daley_incident (mobile,location,situation_type,situation_stetus,type_of_problem,nearest_area,date1,time1)
        VALUES ('$mobile','$region','$situation_type','$situatuin_status','$types_of_problem','$nearest_area','$date','$time')";
        $ins_res = $con->query($ins_query);
        
        echo "your entry is successfull and if yor information is right you got 100rs paytm cash.
        if your info is find as a intertaintement purpus then you will be penalty of 100rs";
       
        die(); 
}  
    


    
}


?>
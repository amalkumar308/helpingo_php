<?php
session_start();
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //fetching data from App
     $mobile = validate($_POST["mobile"]);
    $name = validate($_POST["name"]);
     $upi="";
    $con = con();
    
    

   
$query = "SELECT mobile_no FROM public_reg WHERE mobile_no = '$mobile'";
     
    
    $result = $con->query($query);

    if($result->num_rows>0)
    {
        echo "0";
        die();
    }
    else
    {
        $ins_query = "INSERT INTO public_reg (mobile_no,name,upi)
        VALUES ('$mobile','$name','$upi')";
        $ins_res = $con->query($ins_query);
        

        echo "1";
        die(); 
}  
    


    
}
?>
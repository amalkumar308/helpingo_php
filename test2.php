<?php
session_start();
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //fetching data from form
    $firstname = validate($_POST["first_name"]);
   
    echo $firstname;

    $con = con();
    
    //query for "this user_id is present or not"

   

        //if user_id is not present then insert all data in candidate table in database

        $ins_query = "INSERT INTO test1 (name)
        VALUES ('$firstname')";
        $ins_res = $con->query($ins_query);


       
         //control goes to candiadte home page and session start at the time of signup

        echo "<script>alert('successfully signed up.');</script>";
        die(); 





    
}
?>
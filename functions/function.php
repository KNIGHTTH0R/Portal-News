<?php

   function redirect($location){
       $output='<script>';
       $output=$output."windows.location.href='$location'";
       $output=$output.'</script>';
    
       return $output;
   }

    function confirm_query($result){
        if(!$result){
            die('Query to database failed');
        }
    }


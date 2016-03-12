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

    function get_news($news_id){
        global $conn;
        
        $query = "SELECT * FROM news WHERE id = '$news_id'";
        $result = mysqli_query($conn,$query);
        confirm_query($result);
        
        if(mysqli_num_rows($result)==1){
            return mysqli_fetch_assoc($result);
        }  else {
            return false;
        }
    }
    
    
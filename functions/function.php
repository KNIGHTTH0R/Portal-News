<?php
//    Function for redirect
   function redirect($location){
       $output='<script>';
       $output=$output."windows.location.href='$location'";
       $output=$output.'</script>';
    
       return $output;
   }
   
//   cofirm query function 
function confirm_query($result){
        if(!$result){
            die('Query to database failed');
        }
    }
//    get posts from DataBase
    function get_news($news_id){
        global $conn;
        
        $query = "SELECT * FROM posts WHERE id = '$news_id'";
        $result = mysqli_query($conn,$query);
        confirm_query($result);
        
        if(mysqli_num_rows($result)==1){
            return mysqli_fetch_assoc($result);
        }  else {
            return false;
        }
    }
    
    
<?php
require_once "connection.php";


function binary_count($placement,$position){
    global $conn; 

    $i=1;
    $placement_Temp= '';
    $position_Temp = '';
    do {
        if($i==1){
           $placement_Temp = $placement;
           $position_Temp = $position;
        }else{
            $rows =mysqli_fetch_array( mysqli_query($conn,"SELECT * FROM users WHERE user_id='$placement_Temp'"));
             $placement_Temp = $rows['placement_id']; 
             $position_Temp = $rows['position']; 
            
        }
            if($placement_Temp !=0):
        if($position_Temp==0){
            mysqli_query($conn,"UPDATE users SET left_count=left_count + 1 WHERE user_id='$placement_Temp' ");
        }else{
            mysqli_query($conn,"UPDATE users SET right_count=right_count + 1  WHERE user_id='$placement_Temp' ");
        } 
    //  echo  "User_id ".$placement_Temp."Position ".$position_Temp."<br/>";
    pair_count($placement_Temp);
        endif;
        $i++;
     
    } while ($placement_Temp !=0);

    
        
}


binary_count(90612672,1);


function pair_count($placement_Temp){
global $conn;

$rows =mysqli_fetch_array( mysqli_query($conn,"SELECT * FROM users WHERE user_id='$placement_Temp'"));
 

if($rows['left_count'] == $rows['right_count'] && ($rows['left_count'] > 0 && $rows['right_count'] > 0)){
    $ToDay =  date('d-m-y');
    $have_data =  mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `pair_count` WHERE `user_id` = '$placement_Temp' AND `date` = '$ToDay'"));
    if($have_data >0){
        mysqli_query($conn,"UPDATE `pair_count` SET `no_of_pair`= `no_of_pair` + 1 WHERE `user_id`='$placement_Temp' AND `date` = '$ToDay'");
    
    }else{
        mysqli_query($conn,"INSERT INTO `pair_count` (`user_id`,`no_of_pair`,`date`) VALUES('$placement_Temp','1','$ToDay')");
    }
    
    
}


}





<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
    include_once("elements/connection.php");

    if(isset($_REQUEST['agent_id'])){
        $agent_id=$_REQUEST['agent_id'];
        $result = mysqli_query($conn,"SELECT * FROM `users` WHERE user_id='$agent_id'");
        
   if(mysqli_num_rows($result)>0){
    $data=mysqli_fetch_array($result);
    extract($data);

    $ArrayData = array(   
    'id' =>$id,
    'user_id' =>$user_id,	
    'name' =>$name,	
    'password' =>$password,	
    'mobile' =>$mobile,
    'position' =>$position,	
    'sponsor_id' =>$sponsor_id,	
    'wallet' =>$wallet,
    'left_count' =>$left_count,
    'left_total' =>$left_total,
    'right_count' =>$right_count,
    'right_total' =>$right_total,
    'placement_id' =>$placement_id,
    'left_side' =>$left_side,
    'right_side' =>$right_side,

    );

  
echo json_encode($ArrayData);


   }else{
     
    echo json_encode(array('message'=>false));

   }

    
    }

?>

<?php
session_start();
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="db_cherrymlm";
$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(!$conn){
    echo "Not Connect";
}


//login proccess
if(isset($_REQUEST['login'])){
    $user_id=$_REQUEST['user_id'];
    $password=$_REQUEST['password'];
    move_to_dashboard($user_id,$password);
}

function move_to_dashboard($user_id, $pass){
    global $conn;
    $query=mysqli_query($conn,"SELECT * FROM users WHERE user_id=$user_id && password=$pass");
    if(mysqli_num_rows($query)==1){
        $_SESSION['session_id']=session_id();
        $_SESSION['user_id']=$user_id;
        header("Location:../dashboard.php");
    }else{
        header("Location:../index.php");
    }
}

//Registration Proccess

if(isset($_REQUEST['user_registration'])){
    $name=$_REQUEST['name'];
    $pin=$_REQUEST['pin'];
    $mobile=$_REQUEST['mobile'];
    $password=$_REQUEST['password'];
    $position=$_REQUEST['position'];    
    $s_id=$_REQUEST['sponsor_id'];
    $placement_id=$_REQUEST['placement_id'];
    
    if(check_pin($pin)){
        $posquery=mysqli_query($conn,"SELECT * FROM users WHERE placement_id=$placement_id AND position=$position ");
        if(mysqli_num_rows($posquery)!==1){
            insert_into_users($name,$password,$mobile,$position,$s_id,$placement_id);
            //binary_count($s_id,$position);
            level_distribution($s_id);
            return true;
        }
        return false;
    }
    //header("Location:../registration.php");
       
}

function check_pin($pin){
    global $conn;
    $query=mysqli_query($conn,"SELECT * FROM pins WHERE pin_value=$pin AND status='0' ");
    if(mysqli_num_rows($query)==1){
        mysqli_query($conn,"UPDATE `pins` SET `status`='1' WHERE pin_value=$pin");
        return true;
    }
    return false;

}

function insert_into_users($name,$password,$mobile,$position,$s_id,$placement_id){
    global $conn;
    $user_id=rand(11111111,99999999);
    mysqli_query($conn,"INSERT INTO `users`(`user_id`, `name`, `password`, `mobile`, `position`, `sponsor_id`, `wallet`, `left_count`, `right_count`, `placement_id`, `left_side`, `right_side`) 
    VALUES ('$user_id','$name','$password','$mobile','$position','$s_id','','','','$placement_id','','')");
    
    set_placement_id($user_id,$position,$placement_id);
    
}


function set_placement_id($user_id,$position,$placement_id){
    global $conn;
    
    if($position==0){
        $query=mysqli_query($conn,"SELECT * FROM users WHERE user_id=$placement_id AND left_side='0' ");
        if(mysqli_num_rows($query)==1){
            mysqli_query($conn,"UPDATE `users` SET `left_side`='$user_id' WHERE user_id=$placement_id");
            return true;
        }
        return false;
    }else{
        $query=mysqli_query($conn,"SELECT * FROM users WHERE user_id=$placement_id AND right_side='0' ");
        if(mysqli_num_rows($query)==1){
            mysqli_query($conn,"UPDATE `users` SET `right_side`='$user_id' WHERE user_id=$placement_id");
            return true;
        }
        return false;
    }
    
}



function binary_count($spons,$position){
    global $conn;
    if($position==0){
        $pos="left_count";
    }else{
        $pos="right_count";
    }
    while($spons!=0){
        mysqli_query($conn,"UPDATE 'users' SET '$pos'='$pos'+1 WHERE user_id=$spons ");
        $spons=find_sponsor_id($s_id);
        $position=find_position($s_id);
    }
}

function level_distribution($s_id){
    global $conn;
    $a=0;
    $income=[20,10,5,5,5,5];
    while ($a<6 && $s_id !=0){
        mysqli_query($conn,"UPDATE `users` SET `wallet`= wallet + $income[$a] WHERE user_id=$s_id ");
        $next_id=find_sponsor_id($s_id);
        $s_id=$next_id;
    }
}

function find_sponsor_id($s_id){
    global $conn;
    $data=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `users` WHERE user_id=$s_id "));
    return $data['sponsor_id'];
}

function find_position($q_is){
    global $conn;
    $data=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM 'users WHERE 'user_is'='$s_id' "));
    $pos=$data['position'];
    if($pos==0){
        $pos="left_count";
    }else{
        $pos="right_count";
    }
    return $pos;

}



?>
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
    $query=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$user_id' && password='$pass'");
    if(mysqli_num_rows($query)==1){
        $_SESSION['session_id']=session_id();
        $_SESSION['user_id']=$user_id;
       // header("Location:../dashboard.php");
        
echo "<script>
    window.location.href = '../dashboard.php'
</script>";
         
    }else{
       // header("Location:../index.php");
    echo "<script>
    window.location.href = '../index.php'
    </script>";
    }
}

//Registration Proccess

if(isset($_REQUEST['user_registration'])){
    $user_id=$_REQUEST['user_id'];
    $name=$_REQUEST['name'];
    $pin=$_REQUEST['pin'];
    $mobile=$_REQUEST['mobile'];
    $password=$_REQUEST['password'];
    $position=$_REQUEST['position'];    
    $s_id=$_REQUEST['sponsor_id'];
    $placement_id=$_REQUEST['placement_id'];
    
    if(check_pin($pin)){
        if(check_position($placement_id,$position)){
            insert_into_users($user_id,$name,$password,$mobile,$position,$s_id,$placement_id,$pin);
        }
    }
   // header("Location:../registration.php");
   echo "<script>
   window.location.href = '../registration.php'
</script>";
   
       
}

function check_pin($pin){
    global $conn;
    $query=mysqli_query($conn,"SELECT * FROM pins WHERE pin_value=$pin AND status='0' ");
    if(mysqli_num_rows($query)==1){
        return true;
    }
    return false;

}

function check_position($placement_id,$position){
    global $conn;
    $posquery=mysqli_query($conn,"SELECT * FROM users WHERE placement_id='$placement_id' AND position='$position' ");
    if(mysqli_num_rows($posquery)!==1){
        return true;
    }
    return false;
}

function check_user_id($user_id){
    global $conn;
    $row=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$user_id' ");
    if(mysqli_num_rows($row)!==1){
        return true;
    }
    return false;
}

function insert_into_users($user_id,$name,$password,$mobile,$position,$s_id,$placement_id,$pin){
    global $conn;
    //$user_id=rand(11111111,99999999);
    if(check_user_id($user_id)){
        mysqli_query($conn,"INSERT INTO `users`(`user_id`, `name`, `password`, `mobile`, `position`, `sponsor_id`, `wallet`, `left_count`, `left_total`, `right_count`, `right_total`, `placement_id`, `left_side`, `right_side`) 
        VALUES ('$user_id','$name','$password','$mobile','$position','$s_id','','','','','','$placement_id','0','0')");
        mysqli_query($conn,"UPDATE `pins` SET `status`='1' WHERE pin_value=$pin");
        set_placement_id($user_id,$position,$placement_id);
        sponsor_comission($s_id);
        level_distribution($s_id);
        binary_count($placement_id,$position);
    }
}

function set_placement_id($user_id,$position,$placement_id){
    global $conn;
    
    if($position==0){
        $query=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$placement_id' AND left_side='0' ");
        if(mysqli_num_rows($query)==1){
            mysqli_query($conn,"UPDATE `users` SET `left_side`='$user_id' WHERE user_id='$placement_id'");
            return true;
        }
        return false;
    }else{
        $query=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$placement_id' AND right_side='0' ");
        if(mysqli_num_rows($query)==1){
            mysqli_query($conn,"UPDATE `users` SET `right_side`='$user_id' WHERE user_id='$placement_id'");
            return true;
        }
        return false;
    }
    
}

function sponsor_comission($s_id){
    global $conn;
    $comission=20;
    mysqli_query($conn,"UPDATE `users` SET `sponsor_comission`= sponsor_comission + $comission WHERE user_id='$s_id' ");    
 
}

function level_distribution($s_id){
    global $conn;
    $a=0;
    $income=[20,10,5,5,5,5];
    while ($a<6 && $s_id !=0){
        mysqli_query($conn,"UPDATE `users` SET `wallet`= wallet + $income[$a] WHERE user_id='$s_id' ");
        $next_id=find_sponsor_id($s_id);
        $s_id=$next_id;
        $a++;
    }
}

function find_sponsor_id($s_id){
    global $conn;
    $data=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `users` WHERE user_id='$s_id' "));
    return $data['sponsor_id'];
}
/////////////////////////////////////////////////




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
            mysqli_query($conn,"UPDATE users SET left_count=left_count + 1, left_total=left_total + 1 WHERE user_id='$placement_Temp' ");
        }else{
            mysqli_query($conn,"UPDATE users SET right_count=right_count + 1, right_total=right_total + 1  WHERE user_id='$placement_Temp' ");
        } 
        pair_count($placement_Temp);
        endif;
        $i++;
    } while ($placement_Temp !=0);

        
}


function find_placement_id($placement_id){
    global $conn;
    $data=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `users` WHERE user_id=$placement_id "));
    return $data['placement_id'];
}

function pair_count($placement_Temp){
    global $conn;
    
    $rows =mysqli_fetch_array( mysqli_query($conn,"SELECT * FROM users WHERE user_id='$placement_Temp'"));
     
    
    if(($rows['left_count'] > 0 && $rows['right_count'] > 0)){
        $ToDay =  date('d-m-y');
        $have_data =  mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `pair_count` WHERE `user_id` = '$placement_Temp' AND `date` = '$ToDay'"));
        if($have_data >0){
            mysqli_query($conn,"UPDATE `pair_count` SET `no_of_pair`= `no_of_pair` + 1 WHERE `user_id`='$placement_Temp' AND `date` = '$ToDay'");
            mysqli_query($conn,"UPDATE `users` SET `left_count`= `left_count` - 1, `right_count`= `right_count` - 1 WHERE `user_id`='$placement_Temp'");
        
        }else{
            mysqli_query($conn,"INSERT INTO `pair_count` (`user_id`,`no_of_pair`,`date`) VALUES('$placement_Temp','1','$ToDay')");
            mysqli_query($conn,"UPDATE `users` SET `left_count`= `left_count` - 1,  `right_count`= `right_count` - 1 WHERE `user_id`='$placement_Temp'");
        }
        
        
    }
        
}
    

function find_position($placement_id){
    global $conn;
    $data=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM 'users' WHERE user_id=$placement_id "));
    $pos=$data['position'];
    if($pos==0){
        $pos="left_count";
    }else{
        $pos="right_count";
    }
    return $pos;

}





?>
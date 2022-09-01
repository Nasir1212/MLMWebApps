<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="db_cherrymlm";
$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(!$conn){
    echo "Not Connect";
}


// global $conn;
// $s_id='956321478';
// $row=mysqli_query($conn, "SELECT * FROM `users` WHERE user_id=$s_id ");
// $data=mysqli_fetch_array($row);
// //echo $row;
// echo "<pre>";
// print_r($data);
// echo "</pre>";

// echo $data['sponsor_id'];


global $conn;
    $a=0;
    $income=[20,10,5,5,5,5];
    while ($a<6 ){
        echo "<pre>";
        print_r($income[$a]);
        echo "</pre>";
        $a++;
    }


    function binary_count($placement_id,$position){
        global $conn;
        
        while($placement_id!=0){

            if($position==0){
                mysqli_query($conn,"UPDATE 'users' SET 'left_count'='left_count'+1 WHERE user_id=$placement_id ");
            }else{
                mysqli_query($conn,"UPDATE 'users' SET 'right_count'='right_count'+1 WHERE user_id=$placement_id ");
            }  
            echo $placement_id=find_placement_id($placement_id);
            echo $position=find_position($placement_id);
        }
    }
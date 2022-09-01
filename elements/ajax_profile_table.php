<?php include_once("connection.php");?>
<?php
if(isset($_REQUEST['profile_table'])):
global $conn;
$user_session = $_SESSION['user_id'];
$Query = mysqli_query($conn,"SELECT * FROM `profile` WHERE `user_id`='$user_session'");

if(mysqli_num_rows($Query)==1){
$data = mysqli_fetch_array($Query);
extract($data);
echo json_encode(array(
'id'=>$id,
'user_id'=>$user_id,
'name'=>$name,
'date_of_birth'=>$date_of_birth,
'gender'=>$gender,
'profession'=>$profession,
'mobile'=>$mobile,
'email'=>$email,
'address'=>$address,
'about_me'=>$about_me,
'account_name'=>$account_name,
'account_number'=>$account_number,
'bank_name'=>$bank_name,
'branch'=>$branch,
'swift_code'=>$swift_code,
'profile_image'=>$profile_image,
));

}else{
    $data  = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `users` WHERE `user_id`='$user_session'"));
   echo  json_encode(array('empty_data'=>true,'user_id'=>$user_session,'name'=>$data['name']));
}

endif;




 $body = json_decode(file_get_contents("php://input"), true);


 if(isset($body["updated_profile"])):
     $about_me=$body['about_me'];
     $address=$body['address'];
     $date_of_birth=$body['date_of_birth'];
     $email=$body['email'];
     $gender=$body['gender'];  
     $mobile_number=$body['mobile_number'];
     $profession=$body['profession'];
    

     global $conn;
$user_session = $_SESSION['user_id'];
$Query = mysqli_query($conn,"SELECT * FROM `profile` WHERE `user_id`='$user_session'");
$data  = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `users` WHERE `user_id`='$user_session'"));

extract($data);
if(mysqli_num_rows($Query)!=1){
    $Query = mysqli_query($conn,"INSERT INTO `profile`( `user_id`, `name`, `date_of_birth`, `gender`, `profession`, `mobile`, `email`, `address`, `about_me`) VALUES ('$user_session','$name','$date_of_birth', '$gender', '$profession', '$mobile', '$email', '$address', '$about_me')");
    if($Query){
      echo  json_encode(array('success'=>true));
    }else{
        echo  json_encode(array('success'=>false));
    }

}else{
    $Query = mysqli_query($conn,"UPDATE  `profile` SET  `date_of_birth` ='$date_of_birth', `gender`='$gender', `profession` = '$profession', `mobile`='$mobile_number', `email`='$email', `address`='$address', `about_me`='$about_me' WHERE `user_id` = '$user_session'");
    if($Query){
        echo  json_encode(array('success'=>true));
    }else{
        echo  json_encode(array('success'=>false));
    }
    
}



 endif;





 if(isset($body["updated_banking"])):


    $account_name=$body['account_name'];
    $account_number=$body['account_number'];
    $bank_name=$body['bank_name'];
    $branch=$body['branch'];
    $swift_code=$body['swift_code'];
   

    global $conn;
$user_session = $_SESSION['user_id'];
$Query = mysqli_query($conn,"SELECT * FROM `profile` WHERE `user_id`='$user_session'");



if(mysqli_num_rows($Query)!=1){
   $Query = mysqli_query($conn,"INSERT INTO `profile`( `user_id`,`account_name`, `account_number`, `bank_name`, `branch`, `swift_code`) VALUES (`$user_id`,'$account_name','$account_number','$bank_name', '$branch', '$swift_code')");
   if($Query){
     echo  json_encode(array('success'=>true));
   }else{
       echo  json_encode(array('success'=>false));
   }

}else{

   $Query = mysqli_query($conn,"UPDATE  `profile` SET  `account_name` ='$account_name', `account_number`='$account_number', `bank_name` = '$bank_name', `branch`='$branch', `swift_code`='$swift_code' WHERE `user_id` = '$user_session'");
   if($Query){
       echo  json_encode(array('success'=>true));
   }else{
       echo  json_encode(array('success'=>false));
   }
   
}

endif;






if(isset($body["reset_password"])):


    $old_password=$body['old_password'];
    $new_password=$body['new_password'];
    $repate_password=$body['repate_password'];
 

    global $conn;
$user_session = $_SESSION['user_id'];
$Query = mysqli_query($conn,"SELECT * FROM `users` WHERE `user_id`='$user_session' AND `password`='$old_password'");



if(mysqli_num_rows($Query)==1){

    if($repate_password===$new_password){

    $Query = mysqli_query($conn,"UPDATE  `users` SET  `password` ='$new_password' WHERE `user_id` = '$user_session'");
    echo  json_encode(array('reset_pass'=>true,'message'=>'password Changed'));
    }else{
        echo  json_encode(array('reset_pass'=>false,'message'=>'New password and Confirm password not match'));
    }

}else{
   
    echo  json_encode(array('reset_pass'=>false,'message'=>'Old password not match'));
}



 endif;



 if(isset($_FILES['NewImage'])):
    $response = '';
    $filename = $_FILES['NewImage']['name'];
    // Location
    $location = 'upload/'.uniqid().$filename;
    // file extension
    $file_extension = pathinfo($location, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    // Valid image extensions
    $valid_ext = array("pdf","doc","docx","jpg","png","jpeg");
    $response = 0;
    if(in_array($file_extension,$valid_ext)){
       // Upload file
       if(move_uploaded_file($_FILES['NewImage']['tmp_name'],$location)){
        
        $response = true;

       }else{

        $response= false;
       } 
    }
  

if($response == true):
    global $conn;
    $user_session = $_SESSION['user_id'];
    $Query = mysqli_query($conn,"SELECT * FROM `profile` WHERE `user_id`='$user_session'");
    
    
    
    if(mysqli_num_rows($Query)!=1){
       $Query = mysqli_query($conn,"INSERT INTO `profile`( `user_id`,`profile_image`) VALUES (`$user_session`,`$location`)");
       if($Query){
         echo  json_encode(array('success'=>true));
       }else{
           echo  json_encode(array('success'=>false));
       }
    
    }else{

        $data = mysqli_fetch_array($Query);
extract($data);

if(!empty($profile_image)){ 
    if (file_exists($profile_image)) 
    {
      unlink($profile_image);
   }
   

}
       $Query = mysqli_query($conn,"UPDATE  `profile` SET  `profile_image` ='$location' WHERE `user_id` = '$user_session'");
       if($Query){
           echo  json_encode(array('success'=>true));
       }else{
           echo  json_encode(array('success'=>false));
       }
       
    }
   exit;

endif;


endif;



if(isset($_REQUEST['DownLine'])):
    global $conn;
   $user_id =  $_REQUEST['DownLine'];
    $Query = mysqli_query($conn,"SELECT users.user_id,users.name,users.mobile,profile.profile_image FROM `users` LEFT JOIN `profile` ON profile.user_id = users.user_id  WHERE  users.sponsor_id = '$user_id'");
    
    if(mysqli_num_rows($Query)>0){
        $jsonData =[];

      
        $ProductArray =array();
        while( $data = mysqli_fetch_array($Query)) {            
            extract($data);
         $e  = array(
            'user_id'=>$user_id,
            'name'=>$name,
            'mobile'=>$mobile,
           'profile_image'=>$profile_image,
            
         
           );

 

            array_push($ProductArray,$e);
        } 
        echo json_encode($ProductArray);
    
    
    
    }else{
        echo json_encode(array('error'=>true)); 
    }

  
    
    endif;
    
    
    if(isset($_REQUEST['Refferal'])):
    global $conn;
    $user_session = $_SESSION['user_id'];
    $Query = mysqli_query($conn,"SELECT users.user_id,users.name,users.mobile,profile.profile_image FROM `users` LEFT JOIN `profile` ON profile.user_id = users.user_id  WHERE  users.sponsor_id = '$user_session'");
    
    if(mysqli_num_rows($Query)>0){
        $jsonData =[];

      
        $ProductArray =array();
        while( $data = mysqli_fetch_array($Query)) {            
            extract($data);
         $e  = array(
            'user_id'=>$user_id,
            'name'=>$name,
            'mobile'=>$mobile,
           'profile_image'=>$profile_image,
            
         
           );

 

            array_push($ProductArray,$e);
        } 
        echo json_encode($ProductArray);
    
    
    
    }else{
        echo json_encode(array('error'=>true)); 
    }

  
    
    endif;



    if(isset($body["withdrawal_amount"])):
        
        $Bank=$body['Bank'];
        $account_name=$body['account_name'];
        $account_number=$body['account_number'];
        $withdrawal_amount=$body['withdrawal_amount'];
        $withdrowal_mathod=$body['withdrowal_mathod'];
       
     
   
        global $conn;
        $user_session = $_SESSION['user_id'];

        $Credit = mysqli_query($conn,"SELECT SUM(amount) AS TotalCredit FROM `income_history` WHERE `user_id`='$user_session' AND `cr_dr`='0'");
        $Debit = mysqli_query($conn,"SELECT SUM(amount) AS TotalDebit FROM `income_history` WHERE `user_id`='$user_session' AND `cr_dr`='1'");
  
        $Credit = mysqli_fetch_array($Credit);
        $Debit = mysqli_fetch_array($Debit);
         extract($Credit);
         extract($Debit);
     
        $remaining=  $TotalCredit-$TotalDebit;

        if(!($withdrawal_amount >  $remaining || $withdrawal_amount < 500) ){

            $toDay = date("Y-m-d");
            $Query = mysqli_query($conn,"INSERT INTO `income_history`( `user_id`,`description`,`amount`,`cr_dr`,`date`) VALUES ('$user_session','withdrawal','$withdrawal_amount','1','$toDay')");
            $Query2 = mysqli_query($conn,"INSERT INTO `withdrowal_request`( `user_id`,`withdrowal_mathod`,`account_name`,`account_number`,`bank`,`date`,`amount`) VALUES ('$user_session','$withdrowal_mathod','$account_name','$account_number','$Bank','$toDay','$withdrawal_amount')");
            echo json_encode(array('response'=>true,'message'=>'withdrowal Request accepted'));
      
        }else{
           echo json_encode(array('response'=>false,'message'=>'withdrowal Request not Valid'));
           

        }
   
    endif;


//withdrawal_request


    if(isset($_REQUEST["withdrawalRequest"])):
        


        global $conn;
        $user_session = $_SESSION['user_id'];
         $Query = mysqli_query($conn,"SELECT * FROM `withdrowal_request` WHERE user_id= '$user_session'");
         
         if(mysqli_num_rows($Query)>0){
             $jsonData =[];
     
           
             $ProductArray =array();
             while( $data = mysqli_fetch_array($Query)) {            
                 extract($data);
              $e  = array(
                'id'=>$id,	
                'user_id'=>$user_id,	
                'withdrowal_mathod'=>$withdrowal_mathod,	
                'account_name'=>$account_name,	
                'account_number'=>$account_number,	
                'bank'=>$bank,	
                'amount'=>$amount,	
                'date'=>$date,	
                'status'=>$status,	
                 
              
                );
     
      
     
                 array_push($ProductArray,$e);
             } 
             echo json_encode($ProductArray);
         
         
         
         }else{
             echo json_encode(array('error'=>true)); 
         }
     
       


    endif;

    

    if(isset($_REQUEST["ChangeStatus"])):

        global $conn;
        $id = $_REQUEST['ChangeStatus'];
         $Query = mysqli_query($conn,"UPDATE `withdrowal_request` SET `status`='1' WHERE `id` = '$id'");
if($Query){
    echo json_encode(array('response'=>true,'message'=>'Request Success')); 
}else{
    echo json_encode(array('response'=>false,'message'=>'Request Failed'));  
}        

    endif;
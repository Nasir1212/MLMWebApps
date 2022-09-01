<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>NicePoint Your Ultimate Choise</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php include 'elements/header.php'; ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include 'elements/sidebar.php'; ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">User Dashboard</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                   
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card card-fluid">
                                    <!-- .card-body -->
                                    <div class="card-body text-center" id="profileImageSection">
                                        <!-- .user-avatar -->
                                       
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">My Profile</h5>
                                
                                <div class="tab-regular">
                                    <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">Personal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">Banking</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#contact-justify" role="tab" aria-controls="contact" aria-selected="false">Password</a>
                                        </li>
                                    </ul>
                                <div class="tab-content" id="myTabContent7">
                                    <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
                                        
                                       
                                    </div>
                                    <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
                                  
                                    </div>
                                    <div class="tab-pane fade" id="contact-justify" role="tabpanel" aria-labelledby="contact-tab-justify">
                                    <p>
                                            
                                    <form name="password_reseting">
                    <div class="form-group">

                   
                    <div class="form-group">
                        <label for="old_password">Old Password</label>
                        <input type="text" id="old_password" name="old_password"class="form-control" placeholder="Enter Old Password"  >
                    </div>

                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="text" name="new_password" id="new_password" class="form-control"  placeholder="Enter New Password">
                    </div>

                    <div class="form-group">
                        <label for="repate_password">Confirm Password</label>
                        <input type="text" class="form-control" name="repate_password" id="repate_password" placeholder="Enter Confirm Password" >
                        <input type="hidden"  name="reset_password" value="true">
                    </div>

                    <div class="form-group">
                  

                    <button class="btn btn-secondary" onclick="resetPassword();" type="button">Update</button>

             </form>
                                    
                                  
                                        </p>
                                    </div>
                                </div>
                            </div>
                                    
                                </div>
                            </div>
                            <!-- ============================================================== -->
                           
                        </div>
                        <div class="row">
                           
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include 'elements/footer.php'; ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>

    <script>


        
        let windowLoad = ()=>{
            fetch('elements/ajax_profile_table.php?profile_table')
            .then(response => response.json())
            .then(json =>{ 
            PersonalInputFill(json);
            BankInputField(json);
            ProfileImage(json);
          
            })
            
        }

        window.onload =windowLoad();
       
let PersonalInputFill = (json)=>{

let inputFill = /*html*/

`
<p>

<form name="updated_profile">
   <div class="form-group">


       <label for="">ID</label>
       <input type="text" readonly="true" class="form-control" value ="${json['user_id']}" >
   </div>
   <div class="form-group">
       <label for="">Name</label>
       <input type="text"  readonly="true"  class="form-control" value="${json['name']}" >
   </div>

   <div class="form-group">
       <label for="date_of_birth">Date of Birth</label>
       <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="${json['empty_data']==true?'':json['date_of_birth']}"  placeholder=" Enter Date of Birth">
   </div>
   

   <div class="form-group">
       <label for="gender">Gender</label>
       <input type="email" name="gender" id="gender" class="form-control" value="${json['empty_data']==true?'':json['gender']}"  placeholder="Enter Gender">
       <input type="hidden" name="updated_profile"  class="form-control" value="true" >
   </div>
   <div class="form-group">
       <label for="mobile">Mobile</label>
       <input type="text" id="mobile" name="mobile_number"class="form-control" value="${json['empty_data']==true?'':json['mobile']}" placeholder="Enter Mobile No"  >
   </div>

   <div class="form-group">
       <label for="email">email</label>
       <input type="email" name="email" id="email" class="form-control" value="${json['empty_data']==true?'':json['email']}"  placeholder="Enter email">
   </div>

   <div class="form-group">
       <label for="profession">Profesion</label>
       <input type="input" class="form-control" name="profession" id="profession" value="${json['empty_data']==true?'':json['profession']}" value="${json['empty_data']==false?'':json['empty_data']}" placeholder="Enter Profesion" >
   </div>

   <div class="form-group">
       <label for="about_me">About Me</label>
       <input type="text" name="about_me" class="form-control" id="about_me" value="${json['empty_data']==true?'':json['about_me']}" placeholder="Enter About Me " >
   </div>

   <div class="form-group">
       <label for="address">Address</label>
       <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter Address">${json['empty_data']==true?'':json['address']}</textarea>
   </div>

   <button class="btn btn-secondary" type="button" onclick="UpdatedProfile();">Update</button>

</form>
                                           
 </p>
                     



`;



document.getElementById("home-justify").innerHTML = inputFill;


}

let BankInputField = (json)=>{
  
let inputField = /*html*/
`
<p>

                                  

<form name="updated_banking">


<div class="form-group">
    <label for="account_name">Account Name</label>
    <input type="text" name="account_name" id="account_name" class="form-control"   value="${json['empty_data']==true?'':json['account_name']}" placeholder=" Enter Account Name">
</div>


<div class="form-group">
    <label for="account_number">Account Number</label>
    <input type="email" name="account_number" id="account_number" class="form-control"   value="${json['empty_data']==true?'':json['account_number']}"  placeholder="Enter Account Number">
</div>
<div class="form-group">
    <label for="bank_name">Bank Name</label>
    <input type="text" id="bank_name" name="bank_name"class="form-control"  value="${json['empty_data']==true?'':json['bank_name']}"  placeholder="Enter Bank Name"  >
    <input type="hidden" name="updated_banking" value="true" >
</div>

<div class="form-group">
    <label for="branch">Branch Name</label>
    <input type="email" name="branch" id="branch" class="form-control"  value="${json['empty_data']==true?'':json['branch']}"  placeholder="Enter Branch Name">
</div>

<div class="form-group">
    <label for="swift_code">SWIFT Code</label>
    <input type="text" class="form-control" name="swift_code" id="swift_code" value="${json['empty_data']==true?'':json['swift_code']}" placeholder="Enter SWIFT Code" >
</div> 

<button class="btn btn-secondary" type="button" onclick="UpdateBanking()">Update</button>

</form>
                                    

</p>

`;

document.getElementById("profile-justify").innerHTML = inputField;

}

let UpdatedProfile = ()=>{

    

let formData = new FormData(document.forms["updated_profile"]);

let Data  = Object.fromEntries(formData.entries());


const xhr = new XMLHttpRequest();


xhr.onload = () => {


    if (xhr.status >= 200 && xhr.status < 300) {
 
        let jsonRes = JSON.parse( xhr.responseText)
        if(jsonRes['success']===true){

            swal("Success!", "", "success");

        }else{
            swal("Opps !", "Failed", "warning");
        }
        windowLoad();
}

};


xhr.open('POST', 'elements/ajax_profile_table.php');


xhr.setRequestHeader('Content-Type', 'application/json');


xhr.send(JSON.stringify(Data));

}


let UpdateBanking = ()=>{


    let formData = new FormData(document.forms["updated_banking"]);

let Data  = Object.fromEntries(formData.entries());


const xhr = new XMLHttpRequest();


xhr.onload = () => {


    if (xhr.status >= 200 && xhr.status < 300) {
 
       
        
        let jsonRes = JSON.parse( xhr.responseText)
        if(jsonRes['success']===true){

            swal("Success!", "", "success");

        }else{
            swal("Opps !", "Failed", "warning");
        }
        windowLoad();
    }
};


xhr.open('POST', 'elements/ajax_profile_table.php');


xhr.setRequestHeader('Content-Type', 'application/json');


xhr.send(JSON.stringify(Data));

}
//Profile Image Section

let ProfileImage = (json)=>{

    let Template = /*html*/`
    <a onclick="changeProfileModel('${json['empty_data']==true?'':json['profile_image']}');" id="profileImg" class="user-avatar my-3" style="cursor:pointer">
    <img  src="${json['empty_data']==true?'../assets/images/avatar-1.jpg':json['profile_image'].length===0?'../assets/images/avatar-1.jpg':'elements/'+json['profile_image']}" alt="User Avatar" class="rounded-circle user-avatar-xxl">                                 
    </a>
    <!-- /.user-avatar -->
    <h3 class="card-title mb-2 text-truncate">
    <a href="user-profile.html">${json['empty_data']==true?'':json['name']}</a>
    </h3>
    <h6 class="card-subtitle text-muted mb-3">${json['empty_data']==true?'':json['profession']}</h6>
    
    <p class="text-muted">${json['empty_data']==true?'':json['about_me']}</p>
    
    
    `;
    document.getElementById("profileImageSection").innerHTML = Template;


}



//Reset Password
let resetPassword = ()=>{

   

    let formData = new FormData(document.forms["password_reseting"]);

let Data  = Object.fromEntries(formData.entries());


const xhr = new XMLHttpRequest();


xhr.onload = () => {


    if (xhr.status >= 200 && xhr.status < 300) {
 
        let jsonRes = JSON.parse( xhr.responseText)
        if(jsonRes['reset_pass']===true){

            swal("Success!", `${jsonRes['message']}`, "success");

        }else{
            swal("Opps !", `${jsonRes['message']}`, "warning");
        }
        
}

};


xhr.open('POST', 'elements/ajax_profile_table.php');


xhr.setRequestHeader('Content-Type', 'application/json');


xhr.send(JSON.stringify(Data));



}
let changeProfileModel = ()=>{
    $('#myModal').modal('show')
    

}

let saveChangesImage = ()=>{
let image = document.getElementById("NewImage").files[0];
let formData = new FormData();
formData.append('NewImage',image);
const xhr = new XMLHttpRequest();
xhr.onload = () => {

    if (xhr.status >= 200 && xhr.status < 300) {
 
        let jsonRes = JSON.parse( xhr.responseText)
        if(jsonRes['success']===true){ 
            windowLoad();
            $('#myModal').modal('hide')    
            swal("Success!", `Image Uploaded`, "success");
        }else{
            swal("Opps !", `Image Uploaded Failed`, "warning");
        }
       
        
}

};


xhr.open('POST', 'elements/ajax_profile_table.php');
xhr.send(formData);


}



    </script>

<div class="modal fade" tabindex="-1" id="myModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <input type="file" name="NewImage" id="NewImage"  class="form-control" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="saveChangesImage()">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
 
</html>
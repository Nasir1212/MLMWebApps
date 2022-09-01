<!doctype html>
<html lang="en">
<?php include_once("elements/connection.php");?>
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
                                <h2 class="pageheader-title">User Dashboard - <?php echo $my_id ?></h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Withdrawal Report</li>
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
                        <!-- ============================================================== -->
                        <!-- four widgets   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- total views   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Pin Generatable Amount</h5>
                                        <h2 class="mb-0"> 8,300</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-eye fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end total views   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- total followers   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Total Purchases</h5>
                                        <h2 class="mb-0"> 24,763</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                        <i class="fa fa-handshake fa-fw fa-sm text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end total followers   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- partnerships   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Total Income</h5>
                                        <h2 class="mb-0">2050.00</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                        <i class="fa fa-money-bill-alt fa-fw fa-sm text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end partnerships   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- total earned   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Total Balance</h5>
                                        <h2 class="mb-0"> 149.00</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                        <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end total earned   -->
                        <!-- ============================================================== -->
                    </div>
                   
                        <div class="row">
                            <!-- recent orders  -->
                            <!-- ============================================================== -->
                            
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Withdrawal Report</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Date</th>
                                                        <th class="border-0">Withdrawal Amount</th>
                                                        <th class="border-0">Withdrawal Method</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="RequestShow">
                                                
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- social source  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <form class="splash-container" name="widthdrawal" method="post" action="#" enctype="multipart/form-data" >
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-1">Send Withdrawal Request</h3>
                                            </div>
                                            <div class="card-body">
                                          
                                                <div class="form-group">
                                                    <input class="form-control form-control-lg" type="text" name="withdrawal_amount" required="" placeholder="Withdrawal Amount" autocomplete="off" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Withdrawal Mathod</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name='withdrowal_mathod' onchange="WithdrawalMathod(this)">
                                                    <option selected value="0" >Select</option>
                                                    <option value="1">Cash Counter</option>
                                                    <option value="2">Rocket</option>
                                                    <option value="3">Bkash</option>
                                                    <option value="4">Nagad</option>
                                                    <option value="5">Bank</option>
                                                    </select>
                                                </div>
                                               

                                                <div class="form-group" >
                                                    <input class="form-control form-control-lg" type="text" name="account_number" required="" placeholder="Acount Number " autocomplete="off">
                                                </div>
                                                
                                                <div class="form-group"  style="display:none;">
                                                    <input class="form-control form-control-lg" type="text" name="account_name" required="" placeholder="Account Name" autocomplete="off">
                                                </div>


                                                <div class="form-group" style="display:none;">
                                                    <input class="form-control form-control-lg" type="text" name="Bank" required="" placeholder="Bank Name" autocomplete="off">
                                                </div>
                                                <div class="form-group pt-2">
                                                    <button class="btn btn-block btn-primary" type="button"  onclick="WithdrawalRequest()">Withdrawal Request</button>
                                                </div>
                                                

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end social source  -->
                            </div>
                            
                        </div>
                        <div class="row">
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php include 'elements/footer.php'; ?>
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
let WithdrawalMathod = (evt)=>{
    let account_name = document.getElementsByName("account_name")[0];
    let Bank = document.getElementsByName("Bank")[0];
    let account_number = document.getElementsByName("account_number")[0];
    account_number.placeholder=`${evt.value==5?'Acount ':evt.options[evt.selectedIndex].text}  Number`
   if(evt.value==5){
    Bank.parentElement.style="display:block"
    account_name.parentElement.style="display:block"
   }else{
    Bank.parentElement.style="display:none"
    account_name.parentElement.style="display:none"
   }
  
   

}


let WithdrawalRequest =()=>{

let formData = new FormData(document.forms["widthdrawal"]);
let Data  = Object.fromEntries(formData.entries());

console.log(Data)

const xhr = new XMLHttpRequest();


xhr.onload = () => {


    if (xhr.status >= 200 && xhr.status < 300) {

 
        let jsonRes = JSON.parse( xhr.responseText)
        if(jsonRes['response']===true){

            swal("Success!", `${jsonRes['message']}`, "success");
            windowLoad();
        }else{
            swal("Opps !", `${jsonRes['message']}`, "warning");
         }
        }

};


xhr.open('POST', 'elements/ajax_profile_table.php');


xhr.setRequestHeader('Content-Type', 'application/json');


xhr.send(JSON.stringify(Data));




}

let windowLoad = ()=>{
            fetch('elements/ajax_profile_table.php?withdrawalRequest')
            .then(response => response.json())
            .then(json =>{ 
           
            ShowWithdrawalRequest(json);
          
            })

            
            
        }

        window.onload =windowLoad();


let  ShowWithdrawalRequest = (json)=>{

    let temp = '';
    let Method = '';
    json.map(($data,$a)=>{


        if($data['withdrowal_mathod']==1){
            Method  =  "Cash Counter "+$data['account_number'];
        }else if($data['withdrowal_mathod']==2){
            Method  =  "Rocket "+$data['account_number'];
        }else if($data['withdrowal_mathod']==3){
            Method  =  "Bkash "+$data['account_number'];
        }else if($data['withdrowal_mathod']==4){
            Method  =  "Nagad "+$data['account_number'];
        }else  if($data['withdrowal_mathod']==5){
            Method  =  "<b>Bank Name :</b>"+$data['account_name']+"<b> Bank :</b>"+$data['bank']+"<b> Acount Number : </b> "+$data['account_number'];
        
        }else {
            Method = "Not Selected Method ";
        }
            

        temp +=/*html*/`
        
        <tr>
        <td>${++$a} </td>
        <td> ${$data['date']}</td>
        <td> ${$data['user_id']}</td>
        <td>
        
        ${$data['amount']} </td>
        <td>${Method}    </td>
        <td>
        
               ${$data['status']==0?`Unpaid`:`Paid`} 
            

        
        </td>
    </tr>

        
        `;


    })

   
document.getElementById('RequestShow').innerHTML = temp;


}




    </script>
</body>
 
</html>
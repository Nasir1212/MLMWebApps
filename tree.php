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
    <title>NicePoint You Ultimate Choise</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
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
                                            <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Tree View</li>
                                        </ol >
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
                            <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Tree View</h5>
                                    <div class="card-body p-0" id="ShowCardTree">
                                    
                                  


                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- social source  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header"> Sales By Social Source</h5>
                                    <div class="card-body p-0">
                                        <ul class="social-sales list-group list-group-flush">
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><i class="fab fa-facebook-f"></i></span><span class="social-sales-name">Facebook</span><span class="social-sales-count text-dark">120 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle twitter-bgcolor mr-2"><i class="fab fa-twitter"></i></span><span class="social-sales-name">Twitter</span><span class="social-sales-count text-dark">99 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle instagram-bgcolor mr-2"><i class="fab fa-instagram"></i></span><span class="social-sales-name">Instagram</span><span class="social-sales-count text-dark">76 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle pinterest-bgcolor mr-2"><i class="fab fa-pinterest-p"></i></span><span class="social-sales-name">Pinterest</span><span class="social-sales-count text-dark">56 Sales</span>
                                            </li>
                                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle googleplus-bgcolor mr-2"><i class="fab fa-google-plus-g"></i></span><span class="social-sales-name">Google Plus</span><span class="social-sales-count text-dark">36 Sales</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn-primary-link">View Details</a>
                                    </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
    
    function show_details(a){
        $('#exampleModal').modal("show");
        var agent_id=$(a).attr('id');
        $('#exampleModalLabel').html(agent_id);
       
        var url = `ajax.php?agent_id=${agent_id}`;
      var  Data = JSON.parse(loadDoc(url))
       
        let Template = /*html*/`
        <div class="card-body">
                <h5 class="card-title"><b>Name :</b> ${Data['name']}</h5>
                <h6 class="card-subtitle mb-2 text-muted"><b>Wallet : </b>${Data['wallet']}</h6>
                <p class="card-text"><b>Mobile :</b>${Data['mobile']}</p>
                
            </div>
        `;
      document.getElementById("CardText").innerHTML = Template;
     

    }

    window.onload =()=>{
        ChangeTree ("<?php echo $my_id  ?>")
    }

    function ChangeTree (ele){

    var User_id =[ele];
    var temp_id;
        var temp_id_index;
       var template ='';
        var tem;
    for(let i=0;i<=2;i++){
        temp_id_index=0;
       let pow = Math.pow(2, i);
       
        tem = '';
      
      temp_id =[] ;
        for(let j=0;j<pow;j++){
          
         tem  += 
        
         /*html*/
         `
      
        <div class="col-${12/pow} p-2 text-center">

        <img  onclick="ChangeTree('${User_id[j]}');" src="${(User_id[j]!=0) ? 'assets/images/user.jpg':'assets/images/user_blanck.jpg'}" alt="User Image" class="img-fluid" style="width:50px;cursor:pointer" >
        <p id="${User_id[j]}" style="cursor:pointer" onclick="show_details(this)" >
        ${User_id[j]} </p>

        </div>
         
         `;



        let print_id = User_id[j];
       
         for(let p=0;p<2;p++){
            temp_id[temp_id_index]=fetchLeftRight(p,print_id);
          
            temp_id_index++
         
         }
        
        
        
    }


    template += 
      /*html*/
    `<div class="row p-2">${tem}</div>`;
    User_id = temp_id;
  
  
} 


   document.getElementById("ShowCardTree").innerHTML = template;
       
        
    }

  
function fetchLeftRight(side,agent_id){
    var url = `ajax.php?agent_id=${agent_id}`;
    var Data ='';
            if(side==0){
               var pos='left_side';
            }else{
                pos='right_side';
            }
           
            if(agent_id !=0){
                Data =  JSON.parse(loadDoc(url))
                 return Data[pos]
            }else {
                return 0
            }  
}
        function loadDoc(url) {
        const xhttp = new XMLHttpRequest();
        xhttp.open("GET",url,false );
        xhttp.send();
        return xhttp.responseText;
         }
  
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div  class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="agent_detail_show_on_modal">
      <div class="card" id="CardText" >
           
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
 
</html>
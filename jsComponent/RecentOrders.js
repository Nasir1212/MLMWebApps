class RecentOrders extends HTMLElement{


constructor(){
    super();
    this.state = {
        UserData:[],
        DownLine:[],
    }
  
    this.windowLoading();
    this.loadDoc();
}

 loadDoc =(url)=> {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET",url,false );
    xhttp.send();
    return xhttp.responseText;
     }

windowLoading = ()=>{ 
this.state.UserData =JSON.parse(this.loadDoc('elements/ajax_profile_table.php?Refferal'));

   
}


connectedCallback() {

   
var Temp = '';
    
  this.state.UserData.map((data,i)=>{


let miniTemp ='';

this.state.DownLine =JSON.parse(this.loadDoc(`elements/ajax_profile_table.php?DownLine=${data.user_id}`));

this.state.DownLine.map((data,i)=>{
    miniTemp += /*html*/` 
<tr>
<td>${i+1}</td>
<td>
    <div class="m-r-10"><img src="${data.profile_image ==null?'assets/images/product-pic.jpg': 'elements/'+data.profile_image}" alt="user" class="rounded" width="45"></div>
</td>

<td>${data.user_id}</td>
<td>${data.name}</td>
<td>${data.mobile}</td>
<td>
</tr>
`;


})

 Temp += /*html*/`

<tr>
<td>${i+1}</td>
<td>
    <div class="m-r-10"><img src="${data.profile_image ==null?'assets/images/product-pic.jpg': 'elements/'+data.profile_image}" alt="user" class="rounded" width="45"></div>
</td>
<td>${data.name}</td>

<td>${data.mobile}</td>
<td>
   

<button class="btn btn-outline-light float-right"  data-toggle="collapse" data-target="#${i+1}" aria-expanded="false" aria-controls="collapseThree">
Downline
</button>

</td>

</tr>

<tr>
<td colspan="5">
<div id="${i+1}" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
<div class="card-body">

<table class="table">
  <thead>
    <tr>
    <th class="border-0">#</th>
    <th class="border-0">Image</th>
 
    <th class="border-0">User ID</th>
    <th class="border-0">Name</th>
    <th class="border-0">Mobile</th>
    </tr>
  </thead>
  <tbody>
    
  ${miniTemp}
  </tbody>
</table>

</div>
</div>

</td>
</tr>



`;
    })

   


this.innerHTML = /*html*/`

<div class="card">
    <h5 class="card-header">My Refferal</h5>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-light">
                    <tr class="border-0">
                        <th class="border-0">#</th>
                        <th class="border-0">Image</th>
                        <th class="border-0">Name</th>
                        <th class="border-0">Mobile</th>
                        <th class="border-0">Downline</th>
                    </tr>
                </thead>
                <tbody>
               
               ${Temp}    
                
           
                   
                </tbody>
            </table>
        </div>
    </div>
</div>








`;



}


}

customElements.define("recent-orders", RecentOrders); 
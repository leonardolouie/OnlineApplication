console.log('Welcome to online application')

$(document).ready(function(){
    
    
    
    
    printYear();
    printMonth();

    
    $("#btnAddEmployment").click(function() {
       var elementCount =  $("#employment-container").length
       var incrementedCount =  elementCount + 1
         
        
       const template = <div id={'employment+'incrementedCount'+'}>
       <div class="form-group"> 
           <div class="row"> 
               <div class="col-md-3"><label for={`company_name-${incrementedCount}`} class="font-weight-bold">Company Name</label></div>
               <div class="col-md-9">
                   <input type="text" class="form-control"  name="company_name[]"  id={`company_name-${incrementedCount}`}/> 
               </div>
           </div>
       </div>
       <div class="form-group"> 
           <div class="row"> 
               <div class="col-md-3"><label for={`position-${incrementedCount}`} class="font-weight-bold">Position</label></div>
               <div class="col-md-9">
                   <input type="text" class="form-control"  name="position[]"  id={`position-${incrementedCount}`}/> 
               </div>
           </div>
       </div>
       <div class="form-group"> 
           <div class="row"> 
               <div class="col-md-3"><label for={`from-${incrementedCount}`} class="font-weight-bold">From</label></div>
               <div class="col-md-4">
                   <select id={`from1-${incrementedCount}`} class="form-control  date-month-picker"   name="from[]"  >
                   </select>
               </div>
               <div class="col-md-2"><label for={`year-${incrementedCount}`} class="font-weight-bold">Year</label></div>
               <div class="col-md-3">
                   <select id={`year-${incrementedCount}`} class="form-control  date-year-picker"   name="year[]"  >
                   </select>
               </div>
           </div>
       </div>
   </div>


    $("#employment-container").append(template)


    })
     
    
    function printMonth() {
        var months = ["January", "Februray", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        months.forEach(function(month) {
            $(".date-month-picker").append(new Option(month, month));
        });

    }
    function printYear() {
        var end_year = 2020
        for ( i = 1960; end_year >= i ; end_year--) {
            $(".date-year-picker").append(new Option(end_year, end_year));
        }
    }
})


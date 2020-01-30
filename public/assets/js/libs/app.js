console.log('Welcome to online application')

$(document).ready(function(){
    
    
    
    printYear();
    printMonth();
    printJobs();
    
    $("#btn-submit").click(function(event){
        event.preventDefault();
        submitForm()
    })
    

    function submitForm() { 
        
        swal({
            title:"Are you sure you want to submit?",
            text: " I confirm that the information given in this form is true, complete and accurate.",
            icon: "info",
            buttons: true,
        })
        .then((willSubmit) => {
            if (willSubmit) {
                $("#application-form").submit();
            } else {
                
            }
        });
    }
    
    
    
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

    function printJobs() {

        var jobs = ["ADMIN STAFF", 
        "ACCOUNTING OFFICER", 
        "AREA COORDINATOR", 
        "AREA SUPERVISOR", 
        "BILLING ASSOCIATE",
        "BILLING MESSENGER",
        "BUILDING ATTENDANT",
        "CASH CUSTODIAN",
        "CASHIER",
        "CONCIERGE",
        "CUSTOMER ASSOCIATE",
        "DATA ENCODER",
        "DELIVERY ASSOCIATE",
        "DELIVERY RIDER",
        "DELIVERY RUNNER/WALKER",
        "DISPATCHER",
        "DRIVER",
        "DUCTMAN INSTALLER",
        "ENCODER",
        "EXCHANGE ASSOCIATE",
        "FLEET MANAGEMENT ASSOCIATE",
        "JANITOR",
        "JANITRESS",
        "KITCHEN COOK",
        "KITCHEN HELPER",
        "LEAFLETER",
        "MAINTENANCE",
        "MECHANIC",
        "MERCHANDISER",
        "MOTORIZED SALESMAN",
        "OFFICE STAFF",
        "PIPE INSTALLER",
        "POD MONITORING",
        "POST DELIVERY ASSOCIATE",
        "PRE/POST DELIVERY ASSOCIATE",
        "PUD DRIVER",
        "PUD HELPER",
        "PUSH GIRL",
        "SALES CLERK",
        "SALES LADY",
        "SALES REPRESENTATIVE",
        "SALES STAFF",
        "SELLER",
        "SERVICE CREW",
        "SORTER",
        "SUPERVISOR",
        "TAX ASSOCIATE",
        "WAREHOUSE ASSOCIATE",
        "WAREHOUSE CHECKER",
        "WELDER",
        "DELIVERY BIKER",
        "ASSISTANT PIPE FITTER"]

        jobs.forEach(function(job) {
            $("#position").append(new Option(job, job));
        });
    }
})


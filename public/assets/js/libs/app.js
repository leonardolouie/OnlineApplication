console.log('Welcome to online application')

$(document).ready(function(){
    
    
    
    printYear()
    printMonth()
    printJobs()
    printReligion()
    showOtherReligion()
    showReferral()
    showLicenseToDriver()


    $("#where_job_found").change(function() {
        showReferral()

    })


    $("#religion").change(function() {
        showOtherReligion()

    })

    $("#position").change(function() {
        showLicenseToDriver()

    })


    $("#btn-submit").click(function(event){
        event.preventDefault()
        submitForm()
    })

    $("#preview-summary-button").click(function() {
        showSummaryOfApplication()
    })




    function showSummaryOfApplication() { 

        $("#application-form-summary").empty()
        var position = $("#position").val();
        var where_job_found = $("#where_job_found").val();
        var referred_by = $("#referred_by").val();
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var middle_name= $("#middle_name").val();
        var suffix= $("#suffix").val();
        var nickname= $("#nickname").val();
        var current_address= $("#current_address").val();
        var permanent_address= $("#permanent_address").val();
        var telephone_number= $("#telephone_number").val();
        var mobile_number = $("#mobile_number").val();
        var email = $("#email").val();
        var gender = $("#gender").val();
        var civil_status = $("#civil_status").val();
        var birth_date = $("#birth_date").val();
        var birth_place = $("#birth_place").val();
        var height = $("#height").val();
        var height_m = $("#height_m").val();
        var weight = $("#weight").val();
        var weight_m = $("#weight_m").val();
        var religion = $("#religion").val();
        var other_religion = $("#other_religion").val();
        var phil_number = $("#phil_number").val();
        var hmdf_number = $("#hmdf_number").val();
        var tin_number = $("#tin_number").val();
        var fathers_name = $("#fathers_name").val();
        var mothers_name = $("#mothers_name").val();
        var number_of_siblings = $("#number_of_siblings").val();
        var number_of_children = $("#number_of_children").val();
        var spouse_name = $("#spouse_name").val();
        var restriction_code = $("#restriction_code").val();
        var license_number = $("#license_number").val();
        var license_expiry_date = $("#license_expiry_date").val();
        var type_of_license = $("#type_of_license").val();
        var e_name = $("#e_name").val();
        var e_relation = $("#e_relation").val();
        var e_address = $("#e_address").val();
        var e_contact_number = $("#e_contact_number").val();




        var template = $("#summary-template").html()
        var html = Mustache.render(template, {data:{
            first_name:first_name,
            last_name:last_name,
            middle_name:middle_name,
            suffix:suffix,
            nickname:nickname,
            current_address:current_address,
            permanent_address:permanent_address,
            telephone_number:telephone_number,
            mobile_number:mobile_number,
            email:email,
            gender:gender,
            civil_status:civil_status,
            birth_date:birth_date,
            birth_place:birth_place,
            height:height,
            height_m:height_m,
            weight:weight,
            weight_m:weight_m,
            religion:religion,
            other_religion:other_religion,
            phil_number:phil_number,
            hmdf_number:hmdf_number,
            tin_number:tin_number,
            fathers_name:fathers_name,
            mothers_name:mothers_name,
            number_of_siblings:number_of_siblings,
            number_of_children:number_of_children,
            spouse_name:spouse_name,
            restriction_code:restriction_code,
            license_number:license_number,
            license_expiry_date:license_expiry_date,
            type_of_license:type_of_license,
            e_name:e_name,
            e_relation:e_relation,
            e_address:e_address,
            e_contact_number:e_contact_number,
            position:position,
            referred_by:referred_by,
            where_job_found:where_job_found
        }})
        $("#application-form-summary").append(html)
        
    }



    function showLicenseToDriver () {

        var position = $("#position").val()

        const driver_job = [ "DELIVERY RIDER", "DRIVER"]
     

        if(driver_job.includes(position)) {
            $("#form_license").show()
        }
        else { 
            $("#form_license").hide()
        }


    }

    

    function showReferral() {
        var find_job = $("#where_job_found").val()
        var lower_job = find_job.toLowerCase()


        if(lower_job === 'referral' || lower_job === 'job posting sites') {
            $("#referred_by_form").show()
        }
        else { 
            $("#referred_by_form").hide()
        }

    }

    function showOtherReligion(){

        var religion = $("#religion").val()
        var lower_religion = religion.toLowerCase()

        if(lower_religion == 'others') {
            $("#other_religion").show()
        }
        else { 
            $("#other_religion").hide()
        }


    }
    

    function submitForm() { 
        
        swal({
            title:"Are you sure you want to submit?",
            text: " I confirm that the information given in this form is true, complete and accurate.",
            icon: "info",
            buttons: true,
        })
        .then((willSubmit) => {
            if (willSubmit) {
                $("#application-form").submit()
            } else {
                
            }
        })
    }
    

    function printReligion() {
        var religions = ["Roman Catholic", "Protestant", "Islam", "Iglesia ni Cristo", "Buddhists", "Others"]
        religions.forEach(function(religion) {
            $(".religion_picker").append(new Option(religion, religion))
        })
        
    }
    
    
    function printMonth() {
        var months = ["January", "Februray", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
        months.forEach(function(month) {
            $(".date-month-picker").append(new Option(month, month))
        })
        
    }
    function printYear() {
        var end_year = 2020
        for ( i = 1960; end_year >= i ; end_year--) {
            $(".date-year-picker").append(new Option(end_year, end_year))
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
            $("#position").append(new Option(job, job))
        })
    }
})


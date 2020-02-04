<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('assets/images/icon.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <title> @yield('title')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/3.1.0/mustache.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/libs/app.js')}}"></script>
@verbatim
<script id="summary-template" type="text/template"> 
    <div class="row">

        <div class="col-md-6"> 
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Position Applying for:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.position}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">How did you know about hiring?:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.where_job_found}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Referred by:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.referred_by}}</p>
                </div>
            </div>



            <h1 class="h3 mt-4 mb-4">PERSONAL INFORMATION</h1>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">First Name:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.first_name}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Last Name:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.last_name}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Middle Name:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.middle_name}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Suffix:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.suffix}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Nickname:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.nickname}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Current Address:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.current_address}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Permanent Address:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.permanent_address}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Telephone:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.telephone_number}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Mobile Number:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.mobile_number}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Email:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.email}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Gender:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.gender}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Civil Status:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.civil_status}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Birth Date:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.birth_date}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Birth place:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.birth_place}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Height:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.height}} {{data.height_m}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Weight:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.weight}} {{data.weight_m}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Religion:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.religion}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Other Religion:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.other_religion}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">PhilHealth Number:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.phil_number}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">HMDF /Pag-ibig Number:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.hmdf_number}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Father's Name:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.fathers_name}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Mothers's Name:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.fathers_name}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Number of Siblings:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.number_of_siblings}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Number of Children:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.number_of_children}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Spouse Name:</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.spouse_name}}</p>
                </div>
            </div>
            <div id="form_license"> 
                <div class="row">
                    <div class="col-md-6">  
                      <label class="font-weight-bold">Restriction code:</label>
                    </div>
                    <div class="col-md-6">  
                        <p>{{data.restriction_code}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">  
                      <label class="font-weight-bold">license number:</label>
                    </div>
                    <div class="col-md-6">  
                        <p>{{data.license_number}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">  
                      <label class="font-weight-bold">license Expiry Date:</label>
                    </div>
                    <div class="col-md-6">  
                        <p>{{data.license_expiry_date}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">  
                      <label class="font-weight-bold">Type of License:</label>
                    </div>
                    <div class="col-md-6">  
                        <p>{{data.type_of_license}}</p>
                    </div>
                </div>
            </div>
        </div>
          



        {{-- Next column --}}
        <div class="col-md-6"> 
            <h1 class="h3 mb-4">IN CASE OF EMERGENCY</h1>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Full Name</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.e_name}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Relation</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.e_relation}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Address</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.e_address}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Contact Number</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.e_contact_number}}</p>
                </div>
            </div>
            <h1 class="h3 mb-4 mt-4">EDUCATIONAL BACKGROUND</h1>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Contact Number</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.e_contact_number}}</p>
                </div>
            </div>

            <div class="row"> 
                <div class="col-md-3"><label class="font-weight-bold">Elementary</label></div>
                <div class="col-md-4">
                  <p>{{data.elemetary}} <p>
                </div>
                <div class="col-md-2"><label class="font-weight-bold">Year Graduated</label></div>
                <div class="col-md-3">
                    <p>{{data.elemetary_year_grad}}</p>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-3"><label class="font-weight-bold">Secondary</label></div>
                <div class="col-md-4">
                  <p>{{data.secondary}} <p>
                </div>
                <div class="col-md-2"><label class="font-weight-bold">Year Graduated</label></div>
                <div class="col-md-3">
                    <p>{{data.secondary_year_grad}}</p>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-3"><label class="font-weight-bold">Vocational</label></div>
                <div class="col-md-4">
                  <p>{{data.vocational}} <p>
                </div>
                <div class="col-md-2"><label class="font-weight-bold">Year Graduated</label></div>
                <div class="col-md-3">
                    <p>{{data.vocational_year_grad}}</p>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-3"><label class="font-weight-bold">Vocational Course</label></div>
                <div class="col-md-4">
                  <p>{{data.vocational_course}} <p>
                </div>
                <div class="col-md-2"><label class="font-weight-bold">Vacational Status</label></div>
                <div class="col-md-3">
                    <p>{{data.vocational_status}}</p>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-3"><label class="font-weight-bold">College</label></div>
                <div class="col-md-4">
                  <p>{{data.college}} <p>
                </div>
                <div class="col-md-2"><label class="font-weight-bold">Year Graduated</label></div>
                <div class="col-md-3">
                    <p>{{data.college_year_grad}}</p>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-3"><label class="font-weight-bold">College Course</label></div>
                <div class="col-md-4">
                  <p>{{data.college_course}} <p>
                </div>
                <div class="col-md-2"><label class="font-weight-bold">College Status</label></div>
                <div class="col-md-3">
                    <p>{{data.college_status}}</p>
                </div>
            </div>
            <h1 class="h3 mb-4 mt-4">EMPLOYMENT HISTORY</h1>
            {{-- opening --}}
            <div class="row"> 
                <div class="col-md-2"><label class="font-weight-bold">Company Name</label></div>
                <div class="col-md-4">
                  <p>{{data.company_name_array.0}} <p>
                </div>
                <div class="col-md-3"><label class="font-weight-bold">Position</label></div>
                <div class="col-md-3">
                    <p>{{data.position_array.0}}</p>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-2"><label class="font-weight-bold">From</label></div>
                <div class="col-md-4">
                  <p>{{data.from_month_array.0}} <p>
                </div>
                <div class="col-md-3"><label class="font-weight-bold">Year</label></div>
                <div class="col-md-3">
                    <p>{{data.from_year_array.0}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Reason of Leaving</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.reason_of_leaving_array.0}}</p>
                </div>
            </div>
            {{-- closing --}}
            {{-- opening --}}
            <div class="row"> 
                <div class="col-md-2"><label class="font-weight-bold">Company Name</label></div>
                <div class="col-md-4">
                  <p>{{data.company_name_array.1}} <p>
                </div>
                <div class="col-md-3"><label class="font-weight-bold">Position</label></div>
                <div class="col-md-3">
                    <p>{{data.position_array.1}}</p>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-2"><label class="font-weight-bold">From</label></div>
                <div class="col-md-4">
                  <p>{{data.from_month_array.1}} <p>
                </div>
                <div class="col-md-3"><label class="font-weight-bold">Year</label></div>
                <div class="col-md-3">
                    <p>{{data.from_year_array.1}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Reason of Leaving</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.reason_of_leaving_array.1}}</p>
                </div>
            </div>
            {{-- closing --}}
            {{-- opening --}}
            <div class="row"> 
                <div class="col-md-2"><label class="font-weight-bold">Company Name</label></div>
                <div class="col-md-4">
                  <p>{{data.company_name_array.2}} <p>
                </div>
                <div class="col-md-3"><label class="font-weight-bold">Position</label></div>
                <div class="col-md-3">
                    <p>{{data.position_array.2}}</p>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-2"><label class="font-weight-bold">From</label></div>
                <div class="col-md-4">
                  <p>{{data.from_month_array.2}} <p>
                </div>
                <div class="col-md-3"><label class="font-weight-bold">Year</label></div>
                <div class="col-md-3">
                    <p>{{data.from_year_array.2}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Reason of Leaving</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.reason_of_leaving_array.2}}</p>
                </div>
            </div>
            {{-- closing --}}

            <h1 class="h3 mb-4">CHARACTER REFERENCE</h1>
            {{-- opening --}}
            
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Name</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_name_array.0}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Company</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_company_array.0}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Position</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_position_array.0}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Contact Number</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_contact_number_array.0}}</p>
                </div>
            </div>
            {{-- closing --}}
            {{-- opening --}}
            
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Name</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_name_array.1}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Company</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_company_array.1}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Position</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_position_array.1}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Contact Number</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_contact_number_array.1}}</p>
                </div>
            </div>
            {{-- closing --}}

            {{-- opening --}}
            
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Name</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_name_array.2}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Company</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_company_array.2}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Position</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_position_array.2}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                  <label class="font-weight-bold">Contact Number</label>
                </div>
                <div class="col-md-6">  
                    <p>{{data.ref_contact_number_array.2}}</p>
                </div>
            </div>
            {{-- closing --}}



            


            
            
       
        </div>
    </div>
</script>
@endverbatim


</html>
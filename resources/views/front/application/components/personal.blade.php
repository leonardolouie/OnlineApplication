<div> 
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="last_name" class="font-weight-bold">Last Name</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control"  name="last_name" value="{{old('last_name')}}" id="last_name" required/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="first_name" class="font-weight-bold">First Name</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control" name="first_name"  value="{{old('first_name')}}" id="first_name" required/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="middle_name" class="font-weight-bold">Middle Name</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control" name="middle_name" value="{{old('middle_name')}}" id="middle_name"/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="suffix" class="font-weight-bold">Suffix</label></div>
            <div class="col-md-3">
                <input type="text" class="form-control" value="{{old('suffix')}}" name="suffix" id="suffix"/> 
            </div>
            <div class="col-md-3"> 
                <span>(e.g. Jr, Sr, III) or You can leave it blank</span>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="nickname" class="font-weight-bold">Nickname</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control"  value="{{old('nickname')}}" name="nickname" id="nickname" required/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="current_address" class="font-weight-bold">Current Address</label></div>
            <div class="col-md-9">
                <textarea class="form-control" name="current_address" id="current_address" rows="3" required>{{old('current_address')}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="permanent_address" class="font-weight-bold">Permanent Address</label></div>
            <div class="col-md-9">
                <textarea class="form-control" name="permanent_address" id="permanent_address" rows="3" required>{{old('permanent_address')}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="telephone_number" class="font-weight-bold">Telephone Number</label></div>
            <div class="col-md-6">
                <input type="text" class="form-control"   value="{{old('telephone_number')}}" name="telephone_number" id="telephone_number"/> 
            </div>
            <div class="col-md-3"> 
                <span> (You can leave it blank )</span>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="mobile_number" class="font-weight-bold">Mobile Number</label></div>
            <div class="col-md-6">
                <input type="text" class="form-control" value="{{old('mobile_number')}}" name="mobile_number" id="mobile_number" required/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="email" class="font-weight-bold">Email Address</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control"  value="{{old('email')}}"  name="email" id="email" required/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="gender" class="font-weight-bold">Gender</label></div>
            <div class="col-md-9">
                <select class="form-control" id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="civil_status" class="font-weight-bold">Civil Status</label></div>
            <div class="col-md-9">
                <select class="form-control"   name="civil_status" id="civil_status" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Seperated">Seperated</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3"><label for="birth_date" class="font-weight-bold">Date of Birth</label></div>
        <div class="col-md-9">
            <input class="form-control" type="date" value="{{old('birth_date')}}" name="birth_date"   id="birth_date" required>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="birth_place" class="font-weight-bold">Birth Place</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{old('birth_place')}}" name="birth_place" id="birth_place" required/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3 col-sm-3"><label for="height" class="font-weight-bold">Height</label></div>
            <div class="col-md-4 col-sm-3">
                <input type="text" class="form-control" value="{{old('height')}}" name="height" id="height" required/> 
            </div>
            
            <div class="col-md-2 checkbox__container"> 
                <input type="radio" class="form-check-input" name="height_m" value="ft" checked>
                <p>ft</p>
            </div>
            <div class="col-md-2 checkbox__container">
                <input type="radio" class="form-check-input" name="height_m" value="cm">
                <p>cm</p>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="weight" class="font-weight-bold">Weight</label></div>
            <div class="col-md-4">
                <input type="text" class="form-control" value="{{old('weight')}}" name="weight" id="weight" required/> 
            </div>
            
            <div class="col-md-2 checkbox__container"> 
                <input type="radio" class="form-check-input" name="weight_m" value="kg" checked/>
                <p>kg</p>
            </div>
            <div class="col-md-2 checkbox__container">
                <input type="radio" class="form-check-input" name="weight_m" value="lbs">
                <p>lbs</p>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row" id="religion_form_container"> 
            <div class="col-md-3"><label for="religion" class="font-weight-bold">Religion</label></div>
            <div class="col-md-9">
                <select class="form-control religion_picker"  name="religion" id="religion" required>
                </select>
            <input type="text" name="other_religion" id="other_religion" old="{{old("other_religion")}} "class="form-control" placeholder="Please enter your other religion" />
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="sss_number" class="font-weight-bold">SSS Number</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control"  name="sss_number" value="{{old('sss_number')}}" id="sss_number"/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="phil_number" class="font-weight-bold">PhilHealth Number</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control"  name="phil_number" value="{{old('phil_number')}}" id="phil_number"/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="hmdf_number" class="font-weight-bold">HMDF/Pag-Ibig  Number</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control"  name="hmdf_number" value="{{old('hmdf_number')}}" id="hmdf_number"/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="tin_number" class="font-weight-bold">TIN Number</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control"  name="tin_number" value="{{old('tin_number')}}" id="tin_number"/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="fathers_name" class="font-weight-bold" >Father's Name</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control"  name="fathers_name" value="{{old('fathers_name')}}" id="fathers_name"/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="mothers_name" class="font-weight-bold">Mother's Name</label></div>
            <div class="col-md-9">
                <input type="text" class="form-control"  name="mothers_name" value="{{old('mothers_name')}}" id="mothers_name" required/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="number_of_siblings" class="font-weight-bold">No. of Siblings</label></div>
            <div class="col-md-4">
                <input type="number" class="form-control"  name="number_of_siblings" value="{{old('number_of_siblings')}}" id="number_of_siblings"/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="number_of_children" class="font-weight-bold">No. of Children</label></div>
            <div class="col-md-4">
                <input type="number" class="form-control"  name="number_of_children" value="{{old('number_of_children')}}" id="number_of_children"/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="spouse_name" class="font-weight-bold">Name of Spouse</label></div>
            <div class="col-md-6">
                <input type="text" class="form-control" value="{{old('spouse_name')}}" name="spouse_name" id="spouse_name"/> 
            </div>
            <div class="col-md-3"> 
                <span>You can leave it blank</span>
            </div>
        </div>
    </div>
    <div id="form_license"> 
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="restriction_code" class="font-weight-bold">Restriction Code</label></div>
                <div class="col-md-3">
                    <input type="text" class="form-control" value="{{old('restriction_code')}}" name="restriction_code" id="restriction_code"/> 
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="license_number" class="font-weight-bold">License Number</label></div>
                <div class="col-md-7">
                    <input type="text" class="form-control" value="{{old('license_number')}}" name="license_number" id="license_number" required/> 
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-3"><label for="license_expiry_date" class="font-weight-bold">Date of Expiry</label></div>
            <div class="col-md-9">
                <input class="form-control" type="date"  name="license_expiry_date" value="{{old('license_expiry_date')}}" id="license_expiry_date" required>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="type_of_license" class="font-weight-bold">Type of License</label></div>
                
                <div class="col-md-4 checkbox__container">
                    <input type="radio" class="form-check-input" name="type_of_license" value="Non Professional" checked>
                    <p>Non-Prof</p>
                </div>
                
                <div class="col-md-4 checkbox__container"> 
                    <input type="radio" class="form-check-input" name="type_of_license" value="Professional">
                    <p>Professional</p>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row"> 
            <div class="col-md-3"> <label for="imageInput" class="font-weight-bold">Upload Image</label></div>
            <div class="col-md-8">
                <input class="btn btn-primary" data-preview="#preview" name="image" value="{{old('image')}}" type="file" id="image" required/>
            </div>
        </div>
    </div>
</div>
<div> 
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="elemetary" class="font-weight-bold">Elementary</label></div>
            <div class="col-md-4">
               <input type="text" class="form-control"  name="elemetary" value="{{old('elemetary')}}" id="elemetary"/> 
            </div>
            <div class="col-md-2"><label for="elemetary_year_grad" class="font-weight-bold">Year Graduated</label></div>
            <div class="col-md-3">
                <select  id="elemetary_year_grad" class="form-control date-year-picker"   name="elemetary_year_grad">
                </select>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="secondary" class="font-weight-bold">Secondary</label></div>
            <div class="col-md-4">
               <input type="text" class="form-control"  name="secondary" value="{{old('secondary')}}" id="secondary"/> 
            </div>
            <div class="col-md-2"><label for="secondary_year_grad" class="font-weight-bold">Year Graduated</label></div>
            <div class="col-md-3">
                <select id="secondary_year_grad" class="form-control  date-year-picker"   name="secondary_year_grad"  >
                </select>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="vocational" class="font-weight-bold">Vocational</label></div>
            <div class="col-md-4">
               <input type="text" class="form-control"  name="vocational" value="{{old('vocational')}}" id="vocational"/> 
            </div>
            <div class="col-md-2"><label for="vocational_year_grad" class="font-weight-bold">Year Graduated</label></div>
            <div class="col-md-3">
                <select id="vocational_year_grad" class="form-control  date-year-picker"   name="vocational_year_grad"  >
                </select>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="vocational_course" class="font-weight-bold">Vocational Course</label></div>
            <div class="col-md-4">
               <input type="text" class="form-control"  name="vocational_course" value="{{old('vocational_course')}}" id="vocational_course"/> 
            </div>
            <div class="col-md-2"><label for="vocational_status" class="font-weight-bold">Vacational Status</label></div>
            <div class="col-md-3">
                <select id="vocational_status" class="form-control " name="vocational_status"  >
                    <option value="completed"> Completed </option> 
                    <option value="Not Completed"> Not Completed </option> 
                </select>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="college" class="font-weight-bold">College</label></div>
            <div class="col-md-4">
               <input type="text" class="form-control"  name="college" value="{{old('college')}}" id="college"/> 
            </div>
            <div class="col-md-2"><label for="college_year_grad" class="font-weight-bold">Year Graduated</label></div>
            <div class="col-md-3">
                <select id="college_year_grad" class="form-control  date-year-picker"   name="college_year_grad"  >
                </select>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="college_course" class="font-weight-bold">College Course</label></div>
            <div class="col-md-4">
               <input type="text" class="form-control"  name="college_course" value="{{old('college_course')}}" id="college_course"/> 
            </div>
            <div class="col-md-2"><label for="college_status" class="font-weight-bold">College Status</label></div>
            <div class="col-md-3">
                <select id="college_status" class="form-control "   name="college_status"  >
                    <option value="completed"> Completed </option> 
                    <option value="Not Completed"> Not Completed </option> 
                </select>
            </div>
        </div>
    </div>
</div>
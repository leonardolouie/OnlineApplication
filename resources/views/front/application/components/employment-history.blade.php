<div id="employment-container"> 
    <div id="emplyoment1">
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="company_name1" class="font-weight-bold">Company Name</label></div>
                <div class="col-md-9">
                <input type="text" class="form-control"  name="company_name[]"  value="{{old('company_name.0')}}" id="company_name1"/> 
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="position_h1" class="font-weight-bold">Position</label></div>
                <div class="col-md-9">
                    <input type="text" class="form-control"  name="position_h[]" value="{{old('position_h.0')}}" id="position_h1"/> 
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="from_month1" class="font-weight-bold">From</label></div>
                <div class="col-md-4">
                    <select id="from_month1" class="form-control  date-month-picker"   value="{{old('from_month.0')}}"  name="from_month[]"  >
                    </select>
                </div>
                <div class="col-md-2"><label for="from_year1" class="font-weight-bold">Year</label></div>
                <div class="col-md-3">
                    <select id="from_year1" class="form-control  date-year-picker" name="from_year[]" value="{{old('from_year.0')}}" >
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="to_month1" class="font-weight-bold">To</label></div>
                <div class="col-md-4">
                    <select id="to_month1" class="form-control  date-month-picker"   value="{{old('to_month.0')}}"  name="to_month[]"  >
                    </select>
                </div>
                <div class="col-md-2"><label for="to_year1" class="font-weight-bold">Year</label></div>
                <div class="col-md-3">
                    <select id="to_year1" class="form-control  date-year-picker"    value="{{old('to_year[].0')}}" name="to_year[]"  >
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="reason_of_leaving1" class="font-weight-bold">Reason of Leaving</label></div>
                <div class="col-md-9">
                <input type="text" class="form-control"  name="reason_of_leaving[]"  value="{{old('reason_of_leaving.0')}}" id="reason_of_leaving1"/> 
                </div>
            </div>
        </div>
    </div>
    <div id="emplyoment2">
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="company_name2" class="font-weight-bold">Company Name</label></div>
                <div class="col-md-9">
                <input type="text" class="form-control"  name="company_name[]"  value="{{old('company_name.1')}}" id="company_name2"/> 
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="position_h2" class="font-weight-bold">position_h</label></div>
                <div class="col-md-9">
                    <input type="text" class="form-control"  name="position_h[]" value="{{old('position_h.1')}}" id="position_h2"/> 
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="from_month2" class="font-weight-bold">From</label></div>
                <div class="col-md-4">
                    <select id="from_month2" class="form-control  date-month-picker"   value="{{old('from_month.1')}}"  name="from_month[]"  >
                    </select>
                </div>
                <div class="col-md-2"><label for="from_year2" class="font-weight-bold">Year</label></div>
                <div class="col-md-3">
                    <select id="from_year2" class="form-control  date-year-picker" name="from_year[]" value="{{old('from_year.1')}}" >
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="to_month2" class="font-weight-bold">To</label></div>
                <div class="col-md-4">
                    <select id="to_month2" class="form-control  date-month-picker"   value="{{old('to_month.1')}}"  name="to_month[]"  >
                    </select>
                </div>
                <div class="col-md-2"><label for="to_year2" class="font-weight-bold">Year</label></div>
                <div class="col-md-3">
                    <select id="to_year2" class="form-control  date-year-picker"    value="{{old('to_year[].1')}}" name="to_year[]"  >
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="reason_of_leaving2" class="font-weight-bold">Reason of Leaving</label></div>
                <div class="col-md-9">
                <input type="text" class="form-control"  name="reason_of_leaving[]"  value="{{old('reason_of_leaving.1')}}" id="reason_of_leaving2"/> 
                </div>
            </div>
        </div>
    </div>
    <div id="emplyoment3">
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="company_name3" class="font-weight-bold">Company Name</label></div>
                <div class="col-md-9">
                <input type="text" class="form-control"  name="company_name[]"  value="{{old('company_name.2')}}" id="company_name3"/> 
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="position_h3" class="font-weight-bold">Position</label></div>
                <div class="col-md-9">
                    <input type="text" class="form-control"  name="position_h[]" value="{{old('position_h.2')}}" id="position_h3"/> 
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="from_month2" class="font-weight-bold">From</label></div>
                <div class="col-md-4">
                    <select id="from_month3" class="form-control  date-month-picker"   value="{{old('from_month.3')}}"  name="from_month[]"  >
                    </select>
                </div>
                <div class="col-md-2"><label for="from_year3" class="font-weight-bold">Year</label></div>
                <div class="col-md-3">
                    <select id="from_year3" class="form-control  date-year-picker" name="from_year[]" value="{{old('from_year.2')}}" >
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="to_month3" class="font-weight-bold">To</label></div>
                <div class="col-md-4">
                    <select id="to_month3" class="form-control  date-month-picker"   value="{{old('to_month.2')}}"  name="to_month[]"  >
                    </select>
                </div>
                <div class="col-md-2"><label for="to_year3" class="font-weight-bold">Year</label></div>
                <div class="col-md-3">
                    <select id="to_year3" class="form-control  date-year-picker"    value="{{old('to_year[].2')}}" name="to_year[]"  >
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="reason_of_leaving3" class="font-weight-bold">Reason of Leaving</label></div>
                <div class="col-md-9">
                <input type="text" class="form-control"  name="reason_of_leaving[]"  value="{{old('reason_of_leaving.2')}}" id="reason_of_leaving3"/> 
                </div>
            </div>
        </div>
    </div>
</div>

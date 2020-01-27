<div id="employment-container"> 
    <div class="form-group">
        <button class="btn btn-danger btn-md" id="btnAddEmployment" type="button">Add New Employment History</button>
    </div>
    <div id="emplyoment1">
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="company_name1" class="font-weight-bold">Company Name</label></div>
                <div class="col-md-9">
                    <input type="text" class="form-control"  name="company_name[]"  id="company_name1"/> 
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="position1" class="font-weight-bold">Position</label></div>
                <div class="col-md-9">
                    <input type="text" class="form-control"  name="position[]"  id="position1"/> 
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-3"><label for="from1" class="font-weight-bold">From</label></div>
                <div class="col-md-4">
                    <select id="from1" class="form-control  date-month-picker"   name="from[]"  >
                    </select>
                </div>
                <div class="col-md-2"><label for="year1" class="font-weight-bold">Year</label></div>
                <div class="col-md-3">
                    <select id="year1" class="form-control  date-year-picker"   name="year[]"  >
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
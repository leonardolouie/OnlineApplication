<div> 
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-4"><label for="position" class="font-weight-bold">Position Applying for</label></div>
                <div class="col-md-8">
                <select class="form-control" id="position" value="{{old("position")}}" name="position" required>
                        <option value="driver">Driver</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-4"><label for="where_job_found" class="font-weight-bold">How did you know about hiring?</label></div>
                <div class="col-md-8">
                    <input type="text" class="form-control" value="{{old("where_job_found")}}"  name="where_job_found" id="where_job_found" required/> 
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-4"><label for="referred_by" class="font-weight-bold">Referred by</label></div>
                <div class="col-md-8">
                   <input type="text" class="form-control"  value="{{old("referred_by")}}" id="referred_by" name="referred_by" required/> 
                </div>
            </div>
        </div>
        
</div>
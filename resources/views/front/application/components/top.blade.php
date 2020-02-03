<div> 
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-4"><label for="position" class="font-weight-bold">Position Applying for</label></div>
                <div class="col-md-8">
                <select class="form-control" id="position" value="{{old("position")}}" name="position" required>
                 </select>
                </div>
            </div>
        </div>
        <div class="form-group"> 
            <div class="row"> 
                <div class="col-md-4"><label for="where_job_found" class="font-weight-bold">How did you know about hiring?</label></div>
                <div class="col-md-8">
                    <select id="where_job_found" class="form-control"   value="{{old('where_job_found')}}"  name="where_job_found"  required>
                          <option value="Referral">Referral</option>
                          <option value="Walk-In">Walk-In</option>
                          <option value="Re-Apply">Re-Apply</option>
                          <option value="Social Media">Social Media</option>
                          <option value="Job Posting Sites">Job Posting Sites</option>
                          <option value="Peso">Peso</option>
                          <option value="Sourcing">Sourcing</option>
                          <option value="Job Fair">Job Fair</option>
                    </select> 
                </div>
            </div>
        </div>
        <div class="form-group" id="referred_by_form"> 
            <div class="row"> 
                <div class="col-md-4"><label for="referred_by" class="font-weight-bold">Referred by</label></div>
                <div class="col-md-8">
                   <input type="text" class="form-control"  value="{{old("referred_by")}}" id="referred_by" name="referred_by" /> 
                </div>
            </div>
        </div>
        
</div>
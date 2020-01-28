<div> 
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="e_name" class="font-weight-bold">Full Name</label></div>
            <div class="col-md-9">
               <input type="text" class="form-control"  name="e_name" value="{{old('e_name')}}" id="e_name" required/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="e_relation" class="font-weight-bold">Relation</label></div>
            <div class="col-md-9">
               <input type="text" class="form-control"  name="e_relation" value="{{old('e_relation')}}" id="e_relation" required/> 
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="e_address" class="font-weight-bold">Address</label></div>
            <div class="col-md-9">
                <textarea class="form-control" name="e_address" id="e_address" rows="3" required>{{old('e_address')}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group"> 
        <div class="row"> 
            <div class="col-md-3"><label for="e_contact_number" class="font-weight-bold">Contact Number</label></div>
            <div class="col-md-9">
               <input type="number" class="form-control"  name="e_contact_number" value="{{old('e_contact_number')}}" id="e_contact_number" required/> 
            </div>
        </div>
    </div>
</div>
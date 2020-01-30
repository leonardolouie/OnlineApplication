<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\EmploymentHistory;
use App\CharacterRef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $nullvalue="N/A";
        $validator = Validator::make($request->all(), [
            'position' => 'required',
            'where_job_found' => 'required',
            'last_name' => 'required|min:2', 
            'first_name' => 'required', 
            'current_address' => 'required|min:9', 
            'permanent_address' => 'required|min:9', 
            'mobile_number' => 'required|min:11', 
            'email' => 'required', 
            'gender' => 'required', 
            'civil_status' => 'required', 
            'birth_date' => 'required',
            'birth_place' => 'required',
            'height' => 'required',
            'height_m' => 'required',
            'weight' => 'required',
            'weight_m' => 'required',
            'religion' => 'required',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'type_of_license' =>  'required',
            'e_name' =>  'required',
            'e_relation' => 'required',
            'e_address' => 'required|min:9', 
            'e_contact_number' => 'required|min:11'
        ]);

        $height = $request->height ."".$request->height_m;
        $weight = $request->weight ."".$request->weight_m;

        if ($validator->fails()) {
            return Redirect::back()->withInput($request->all())->withErrors($validator);
        }

        else {
            $applicant = Applicant::create([
                'position' => $request->position,
                'where_job_found' => $request->where_job_found, 
                'referred_by' => isset( $request->referred_by) ? $request->referred_by :  $nullvalue, 
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'middle_name' => isset( $request->middle_name) ? $request->middle_name :  $nullvalue, 
                'suffix' => isset( $request->suffix) ? $request->suffix :  $nullvalue, 
                'nickname' => isset( $request->nickname) ? $request->nickname :  $nullvalue, 
                'current_address' => $request->current_address,
                'permanent_address' => $request->permanent_address,
                'telephone_number' => isset( $request->telephone_number) ? $request->telephone_number :  $nullvalue, 
                'mobile_number' => $request->mobile_number,
                'email' => $request->email,
                'gender' => $request->gender,
                'civil_status' => $request->civil_status,
                'birth_date' => $request->birth_date,
                'birth_place' => $request->birth_place,
                'height' =>   $height,
                'weight' =>   $weight,
                'religion' => $request->religion,
                'sss_number' => isset( $request->sss_number) ? $request->sss_number :  $nullvalue, 
                'phil_number' => isset( $request->phil_number) ? $request->phil_number :  $nullvalue, 
                'hmdf_number' => isset( $request->hmdf_number) ? $request->hmdf_number :  $nullvalue, 
                'tin_number' => isset( $request->tin_number) ? $request->hmdf_number :  $nullvalue, 
                'fathers_name' => $request->fathers_name,
                'mothers_name' => $request->mothers_name,
                'number_of_siblings' => isset( $request->number_of_siblings) ? $request->number_of_siblings :  $nullvalue, 
                'number_of_children' => isset( $request->number_of_siblings) ? $request->number_of_siblings :  $nullvalue, 
                'spouse_name' => isset( $request->spouse_name) ? $request->spouse_name :  $nullvalue, 
                'restriction_code' => $request->restriction_code,
                'license_number' => $request->license_number,
                'license_expiry_date' => $request->license_expiry_date,
                'type_of_license' =>  $request->type_of_license,
                'e_name' =>  $request->e_name,
                'e_relation' =>  $request->e_relation,
                'e_address' =>  $request->e_address,
                'e_contact_number' =>  $request->e_contact_number,
                'elemetary' =>  isset( $request->elemetary) ? $request->elemetary :  $nullvalue, 
                'elemetary_year_grad' =>  isset( $request->elemetary_year_grad) ? $request->elemetary_year_grad :  $nullvalue, 
                'secondary' =>  isset( $request->secondary) ? $request->secondary :  $nullvalue,
                'secondary_year_grad' =>  isset( $request->secondary_year_grad) ? $request->secondary_year_grad :  $nullvalue,
                'vocational' =>  isset( $request->vocational) ? $request->vocational :  $nullvalue,
                'vocational_year_grad' => isset( $request->vocational_year_grad) ? $request->vocational_year_grad :  $nullvalue,
                'vocational_course' =>  isset( $request->vocational_course) ? $request->vocational_course :  $nullvalue,
                'vocational_status' =>  isset( $request->vocational_status) ? $request->vocational_status :  $nullvalue,
                'college' =>  isset( $request->college) ? $request->college :  $nullvalue,
                'college_year_grad' => isset( $request->college_year_grad) ? $request->college_year_grad :  $nullvalue,
                'college_course' =>  isset( $request->college_course) ? $request->college_course :  $nullvalue,
                'college_status' =>  isset( $request->college_status) ? $request->college_status :  $nullvalue,




            ]);

            if($applicant) {
               $applicant_id = $applicant->id;
               $count = count($request->position_h);
               $reference_count = count($request->ref_name);

    

            for ($i = 0; $i < $count; $i++) {
                   
                $from = $request->from_month[$i] . ",".$request->from_year[$i];
                $to = $request->to_month[$i] . ",".$request->to_year[$i];

                 EmploymentHistory::create([
                    'applicant_id' => $applicant_id,
                    'company_name' => isset( $request->company_name[$i]) ? $request->company_name[$i] :  $nullvalue,
                    'position' => isset( $request->position_h[$i]) ? $request->position_h[$i] :  $nullvalue,
                    'from' => $from,
                    'to' => $to,
                    'reason_of_leaving' => isset( $request->reason_of_leaving[$i]) ? $request->reason_of_leaving[$i] :  $nullvalue,

                ]);

                
            }

            
            for ($i = 0; $i <  $reference_count; $i++) {
                   
                $from = $request->from_month[$i] . ",".$request->from_year[$i];
                $to = $request->to_month[$i] . ",".$request->to_year[$i];

                   CharacterRef::create([
                    'applicant_id' => $applicant_id,
                    'name' => isset( $request->ref_name[$i]) ? $request->ref_name[$i] :  $nullvalue,
                    'position' => isset( $request->ref_position[$i]) ? $request->ref_position[$i] :  $nullvalue,
                    'company_name' =>isset( $request->ref_company[$i]) ? $request->ref_company[$i] :  $nullvalue,
                    'contact_number' =>isset( $request->ref_contact_number[$i]) ? $request->ref_contact_number[$i] :  $nullvalue,
                ]);

                
            }
            
            return redirect('application/success');
         }
          

       }
    }

    public function success() 
    {
        return view('front.application.success');
    }

    /**
     * Store a newly created resource in storage.
     *````````````````````````
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}

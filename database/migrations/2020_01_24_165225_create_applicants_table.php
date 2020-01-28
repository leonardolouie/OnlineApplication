<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('position')->nullable();
            $table->string('where_job_found')->nullable();
            $table->string('referred_by')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('nickname')->nullable();
            $table->string('current_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('religion')->nullable();
            $table->string('sss_number')->nullable();
            $table->string('phil_number')->nullable();
            $table->string('hmdf_number')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('number_of_siblings')->nullable();
            $table->string('number_of_children')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('restriction_code')->nullable();
            $table->string('license_number')->nullable();
            $table->string('license_expiry_date')->nullable();
            $table->string('type_of_license')->nullable();
            /**
             * Emergency Person Fields
             */
            $table->string('e_name')->nullable();
            $table->string('e_relation')->nullable();
            $table->string('e_address')->nullable();
            $table->string('e_contact_number')->nullable();
            /**
             * Education background
             */
            $table->string('elemetary')->nullable();
            $table->string('elemetary_year_grad')->nullable();
            $table->string('secondary')->nullable();
            $table->string('secondary_year_grad')->nullable();
            $table->string('vocational')->nullable();
            $table->string('vocational_course')->nullable();
            $table->string('vocational_year_grad')->nullable();
            $table->string('vocational_status')->nullable();
            $table->string('college')->nullable();
            $table->string('college_course')->nullable();
            $table->string('college_year_grad')->nullable();
            $table->string('college_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}

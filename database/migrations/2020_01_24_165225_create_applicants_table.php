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
            $table->bigIncrements('id');
            $table->string('position');
            $table->string('where_job_found');
            $table->string('referred_by');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix');
            $table->string('nickname');
            $table->string('current_address');
            $table->string('permanent_address');
            $table->string('telephone_number');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('height');
            $table->string('weight');
            $table->string('religion');
            $table->string('sss_number');
            $table->string('phil_number');
            $table->string('hmdf_number');
            $table->string('tin_number');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('number_of_siblings');
            $table->string('number_of_children');
            $table->string('spouse_name');
            $table->string('restriction_code');
            $table->string('license_number');
            $table->string('license_expiry_date');
            $table->string('type_of_license');
            /**
             * Emergency Person Fields
             */
            $table->string('e_name');
            $table->string('e_relation');
            $table->string('e_address');
            $table->string('e_contact_number');
            /**
             * Education background
             */
            $table->string('elemetary');
            $table->string('elemetary_year_grad');
            $table->string('secondary');
            $table->string('secondary_year_grad');
            $table->string('vocational');
            $table->string('vocational_course');
            $table->string('vocational_year_grad');
            $table->string('vocational_status');
            $table->string('college');
            $table->string('college_course');
            $table->string('college_year_grad');
            $table->string('college_status');
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

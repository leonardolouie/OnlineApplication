<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterRefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_refs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('applicant_id');
            $table->string('name');
            $table->string('position');
            $table->string('company_name');
            $table->string('contact_number');
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
        Schema::dropIfExists('character_refs');
    }
}

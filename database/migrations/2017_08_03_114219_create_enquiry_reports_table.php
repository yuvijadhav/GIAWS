<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiryReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('enquiry_reports', function (Blueprint $table) {
            $table->increments('enquiry_report_id');
            $table->string('enquiry_name');
            $table->string('enquiry_email');
            $table->string('enquiry_phone');
            $table->string('enquiry_company');
            $table->string('enquiry_title');
            $table->string('enquiry_country');
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
        Schema::dropIfExists('enquiry_reports');
    }
}

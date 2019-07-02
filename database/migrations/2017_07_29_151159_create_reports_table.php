<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('report_id');
            $table->longText('report_title');
            $table->integer('sub_category_id')->unsigned();
            $table->foreign('sub_category_id')->references('sub_category_id')->on('sub_categories');
            $table->integer('publisher_id')->unsigned();
            $table->foreign('publisher_id')->references('publisher_id')->on('publishers');
            $table->integer('region_id')->unsigned();
            $table->foreign('region_id')->references('region_id')->on('regions');
            $table->string('report_date')->nullable();
            $table->integer('report_pages')->nullable();
            $table->longText('long_description')->nullable();
            $table->longText('long_content')->nullable();
            $table->longText('table_figures')->nullable();
            $table->string('url')->nullable();
            $table->integer('status')->default(1);
            $table->string('single_price')->nullable();
            $table->string('corporate_price')->nullable();
            $table->string('enterprise_price')->nullable();
            $table->longText('meta_title')->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->longText('meta_description')->nullable();
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
        Schema::dropIfExists('reports');
    }
}

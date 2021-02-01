<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sort_name')->nullable();
            $table->string('foreign_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('banner')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->integer('province_id');
            $table->integer('district_id');
            $table->integer('ward_id');
            $table->string('address');
            $table->longText('desc')->nullable();
            $table->integer('status')->default(0);
            $table->integer('active')->default(0);
            $table->string('type')->default('NORMAL');
            $table->string('facebook')->nullable();
            $table->string('zalo')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('tax_code')->nullable();
            $table->string('business_registration')->nullable();
            $table->string('fouded_year')->nullable();
            $table->string('experience_year')->nullable();
            $table->string('specialize')->nullable();
            $table->longText('branches')->nullable();
            $table->string('current_employee')->nullable();
            $table->string('working_time')->nullable();
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
        Schema::dropIfExists('shops');
    }
}

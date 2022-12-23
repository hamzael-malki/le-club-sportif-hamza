<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->String('Activity_name');
            $table->String('Activity_desc');
            $table->float('Activity_price');
            $table->String('Activity_type');
            $table->String('Activity_status')->default('active');
            $table->integer('Max_nombre')->default(0);
            $table->float('Activity_time');
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
        Schema::dropIfExists('activities');
    }
};

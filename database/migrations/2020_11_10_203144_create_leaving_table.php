<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaving', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('pending');
            $table->string('comment')->nullable();
            $table->string('type')->nullable();
            $table->time('timefrom');
            $table->time('timeto');
            $table->date('day');
            $table->foreignId('emp_id')->constrained('employees');
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
        Schema::dropIfExists('leaving');
    }
}

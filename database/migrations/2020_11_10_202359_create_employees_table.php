<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('status')->nullable();
            $table->string('pass');
            $table->string('img')->nullable();
            $table->string('gender');
            $table->date('BOD');
            $table->string('address');
            $table->integer('phone')->unique();
            $table->string('depart');
            $table->string('approving')->default('pending');
            $table->smallInteger('groubID')->default(0);
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
        Schema::dropIfExists('employees');
    }
}

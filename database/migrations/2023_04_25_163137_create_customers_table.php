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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('address');
            $table->enum('inlineRadioOptions', ['M','F', 'O']);
            $table->string('state');
            $table->string('city');
            $table->string('dob');
            $table->string('postalCode');
            $table->string('course');
            $table->string('email');
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
        Schema::dropIfExists('customers');
    }
};

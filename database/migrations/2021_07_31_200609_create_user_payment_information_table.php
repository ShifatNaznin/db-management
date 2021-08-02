<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPaymentInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_payment_information', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number',200)->nullable();
            $table->string('full_name',200)->nullable();
            $table->string('phone',200)->nullable();
            $table->string('email',200)->nullable();
            $table->string('division',200)->nullable();
            $table->string('status',200)->nullable();
            $table->string('ammount',200)->nullable();
            $table->string('otp',200)->nullable();
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
        Schema::dropIfExists('user_payment_information');
    }
}

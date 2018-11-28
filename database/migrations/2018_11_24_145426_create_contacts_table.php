<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->default(' +48 122 33 44 555')->nullable();
            $table->string('mobile')->default('+12 555 44 33 123')->nullable();
            $table->string('address')->default(' Office 305 Street 15, Manhattan, New York')->nullable();
            $table->string('email')->default('support@gmail.com')->nullable();
            $table->text('map')->nullable();
            $table->boolean('publishMobile')->default(0);
            $table->boolean('publishPhone')->default(0);
            $table->boolean('publishEmail')->default(0);
            $table->boolean('publishAddress')->default(0);
            $table->boolean('publishMap')->default(0);
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
        Schema::dropIfExists('contacts');
    }
}

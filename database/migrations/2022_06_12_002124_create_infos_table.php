<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**'
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('info_name')->default('teste');
            $table->string('info_logo')->nullable();
            $table->string('info_email')->nullable();
            $table->string('info_phone')->nullable();
            $table->string('info_phone2')->nullable();
            $table->string('info_facebook')->nullable();
            $table->string('info_instagram')->nullable();
            $table->longText('info_description')->nullable();
            $table->string('info_address_street')->nullable();
            $table->string('info_address_number')->nullable();
            $table->string('info_address_city')->nullable();
            $table->string('info_address_state')->nullable();
            $table->string('info_address_country')->nullable();
            $table->string('info_address_cep')->nullable();
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
        Schema::dropIfExists('infos');
    }
};

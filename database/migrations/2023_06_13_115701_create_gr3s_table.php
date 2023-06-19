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
        Schema::create('gr3s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('namePet');
            $table->integer('agePet');
            $table->string('breedPet');
            $table->string('ownPet');
            $table->string('number');
            $table->string('address');
            $table->string('GrIns');
            $table->string('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gr3s');
    }
};

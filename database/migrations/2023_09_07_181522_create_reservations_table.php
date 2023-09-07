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
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('Phone');
                $table->datetime('res_date');
                $table->bigInteger('resturant_id');
                $table->bigInteger('user_id');
                $table->integer('guest_number');
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->nullable(); // Set the default value to NULL
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};

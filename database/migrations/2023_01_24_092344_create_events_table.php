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
        Schema::create('events', function (Blueprint $table) {
            $table->id('id');
            $table->string('azure_id')->nullable();
            $table->foreignId('event_type_id');
            $table->boolean('all_day')->default(0);
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('title');
            $table->text('body')->nullable();
            $table->text('joining_instructions')->nullable();
            $table->string('registration_url')->nullable();
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
        Schema::dropIfExists('events');
    }
};

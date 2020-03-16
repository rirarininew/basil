<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutlet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outlet', function (Blueprint $table) {
            $table->bigIncrements('outlet_id');
            $table->string('outlet_name');
            $table->string('outlet_address');
            $table->string('outlet_city');
            $table->string('outlet_province');
            $table->string('outlet_contact');
            $table->string('outlet_user');
            $table->enum('outlet_status', array("active", "inactive"));
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
        Schema::dropIfExists('outlet');
    }
}

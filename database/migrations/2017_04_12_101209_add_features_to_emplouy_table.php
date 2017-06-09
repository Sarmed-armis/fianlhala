<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeaturesToEmplouyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employs', function (Blueprint $table) {

            $table->string('address');
            $table->string('b_address');
            $table->string('sex');
            $table->string('work_date');
            $table->string('sinetafic_name');
            $table->string('work_status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

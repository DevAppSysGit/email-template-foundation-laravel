<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailtempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailtemps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tempname');
            $table->string('tempheader');
            $table->string('tempdesc');
            $table->string('tempbody');
            $table->string('tempfooter');
            $table->string('emailid');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emailtemps');
    }
}

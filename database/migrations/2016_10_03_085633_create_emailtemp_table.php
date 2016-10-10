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
            $table->text('tempheader');
            $table->text('tempdesc');
            $table->text('tempbody');
            $table->text('tempfooter');
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

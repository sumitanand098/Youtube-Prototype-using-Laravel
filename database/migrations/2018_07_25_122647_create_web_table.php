<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web', function (Blueprint $table) {
            $table->increments('id');
            $table->string('web_name');
            $table->string('email');
            $table->string('dev_by');
            $table->integer('mob');
            $table->text('location');
            $table->date('formed');
            $table->rememberToken();
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
        Schema::drop('web');
    }
}

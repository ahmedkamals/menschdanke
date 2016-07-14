<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('shop_id')->references('id')->on('shops');
          $table->string('name');
          $table->timestamp('created');
          $table->timestamp('modified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropForeign(['shop_id']);
        });

        Schema::disableForeignKeyConstraints();
        Schema::drop('offers');
        Schema::enableForeignKeyConstraints();
    }
}

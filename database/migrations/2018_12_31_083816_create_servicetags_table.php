<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicetagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicetags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id')->nullable();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('slug');
            $table->integer('approved')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicetags');
    }
}

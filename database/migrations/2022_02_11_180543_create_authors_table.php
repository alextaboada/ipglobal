<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('street');
            $table->string('suite');
            $table->string('city');
            $table->string('zipcode');
            $table->string('lat');
            $table->string('lng');
            $table->string('phone');
            $table->string('website');
            $table->string('company_name');
            $table->string('catchPhrase');
            $table->string('bs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}

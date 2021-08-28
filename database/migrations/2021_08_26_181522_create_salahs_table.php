<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salahs', function (Blueprint $table) {
            $table->id();
            $table->string ('fojor');
            $table->string ('juhor');
            $table->string ('asor');
            $table->string ('magrib');
            $table->string ('esha');
            $table->string ('tahajjud');
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
        Schema::dropIfExists('salahs');
    }
}

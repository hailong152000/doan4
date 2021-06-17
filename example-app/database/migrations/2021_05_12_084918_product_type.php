<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('NCC');
        
            $table->foreign('NCC')->references('id')->on('nccs');
        });
        // Schema::table('products', function (Blueprint $table) {
        //     $table->string('NCC');
        //     $table->foreignId('NCC')->constrained('nccs')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');;
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}

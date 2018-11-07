<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeFieldsNullableImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function($table) {
            $table->string('name')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->string('imgur_id')->nullable()->change();
            $table->string('imgur_link')->nullable()->change();
            $table->integer('category_id')->nullable()->change();
            $table->string('slug')->nullable()->change();
            $table->boolean('main')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function($table) {
            $table->string('name')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->string('imgur_id')->nullable()->change();
            $table->string('imgur_link')->nullable()->change();
            $table->integer('category_id')->nullable()->change();
            $table->string('slug')->nullable()->change();
            $table->boolean('main')->nullable()->change();
        });
    }
}

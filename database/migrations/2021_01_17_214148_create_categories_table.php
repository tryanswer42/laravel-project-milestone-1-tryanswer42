<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('category_faq', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('faq_id');
            $table->timestamps();

            $table->unique(['category_id','faq_id']);

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')->onDelete('cascade');

            $table->foreign('faq_id')
                ->references('id')
                ->on('faqs')->onDelete('cascade');
        });

        $seeder = new \Database\Seeders\DatabaseSeeder();
        $seeder->run();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

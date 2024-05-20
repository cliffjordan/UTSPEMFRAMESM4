<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->integer('price');
            $table->string('image', 255)->nullable();
            $table->unsignedBigInteger('category_id');
            $table->date('expired_at');
            $table->string('modified_by', 255)->comment('email user');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            //$table->timestamp('created_at')->useCurrent();
            //$table->timestamp('updated_at')->useCurrentOnUpdate();

            // Optional: Jika Anda ingin menggunakan 'updated_at' Laravel default
            // $table->timestamp('updated_at')->useCurrent();
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

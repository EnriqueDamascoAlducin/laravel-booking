<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('main_photo')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->float('price')->nullable();
            $table->float('special_price')->nullable();
            $table->float('last_hours')->comment('how long in hours')->nullable();
            $table->longText('description')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('extra_comments')->nullable();
            $table->string('payment_by')->length(20)->comment('validate if is individual or group')->default('individual')->nullable();
            $table->integer('allow_kids')->comment('verify if can add kids to this flight')->default(0);
            $table->integer('min_people')->comment('min people to buy')->default(1)->nullable();
            $table->integer('max_people')->comment('max qty of user by flight')->default(5)->nullable();
            $table->integer('is_recommended')->comment('validate if flight is shown in recommended section')->default(0)->nullable() ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};

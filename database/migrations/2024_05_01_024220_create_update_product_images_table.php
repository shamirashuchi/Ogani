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
        Schema::create('update_product_images', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('product_manager_id');
            $table->integer('user_id');
            $table->text('image');
            $table->tinyInteger('flag')->default(0);
            $table->string('action')->default('Requested');
            $table->datetime('custom_created_at')->nullable();
            $table->datetime('custom_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update_product_images');
    }
};

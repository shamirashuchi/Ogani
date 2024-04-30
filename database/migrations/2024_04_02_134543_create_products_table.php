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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('product_manager_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('brand_id');
            $table->integer('unit_id');
            $table->string('name');
            $table->string('code');
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('regular_price');
            $table->integer('selling_price');
            $table->integer('stock_amount')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('featured_status')->default(0);
            $table->tinyInteger('trending_status')->default(0);
            $table->integer('sales_count')->default(0);
            $table->integer('hit_count')->default(0);
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
        Schema::dropIfExists('products');
    }
};

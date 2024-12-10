<?php

use App\Models\brand;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->dropColumn('name');
            $table->string('brand_id')->change();
            $table->integer('dosage');
            $table->foreignIdFor(brand::class);
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('stock');
            $table->integer('previous_order_quantity');
            $table->timestamp('previous_order_date')->nullable();
            $table->integer('next_order_quantity');
            $table->timestamp('next_order_date')->nullable();
            $table->integer('average use');
            $table->integer('total_order');
            $table->integer('order_cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medications');
    }
};

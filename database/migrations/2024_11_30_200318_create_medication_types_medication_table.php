<?php

use App\Models\medication;
use App\Models\medication_type;
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
        Schema::create('medication_types_medication', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(medication_type::class)->constrained();
            $table->foreignIdFor(medication::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medication_types_medication');
    }
};

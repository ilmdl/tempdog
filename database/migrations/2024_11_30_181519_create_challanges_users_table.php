<?php

use App\Models\challange;
use App\Models\User;
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
        Schema::create('challanges_users', function (Blueprint $table) {
            $table->foreignIdFor(challange::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challanges_users');
    }
};

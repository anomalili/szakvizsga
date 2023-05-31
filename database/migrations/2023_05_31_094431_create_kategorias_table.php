<?php

use App\Models\kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id();
            $table->string('kategorianev');
            $table->timestamps();
        });
        kategoria::create(['kategorianev' => 'Természetismeret']);
        kategoria::create(['kategorianev' => 'Atomfizika']);
        kategoria::create(['kategorianev' => 'Kvantumfizika']);
        kategoria::create(['kategorianev' => 'Kriminológia']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorias');
    }
};

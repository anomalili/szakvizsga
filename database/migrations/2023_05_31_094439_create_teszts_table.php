<?php

use App\Models\kategoria;
use App\Models\teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });
        teszt::create(['kerdes' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v1' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v2' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v3'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit','v4'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'kategoriaId' => 1]);
        teszt::create(['kerdes' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v1' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v2' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v3'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit','v4'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'kategoriaId' => 2]);
        teszt::create(['kerdes' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v1' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v2' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v3'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit','v4'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'kategoriaId' => 3]);
        teszt::create(['kerdes' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v1' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v2' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v3'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit','v4'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'kategoriaId' => 4]);
        teszt::create(['kerdes' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v1' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v2' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v3'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit','v4'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'kategoriaId' => 1]);
        teszt::create(['kerdes' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v1' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v2' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v3'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit','v4'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'kategoriaId' => 2]);
        teszt::create(['kerdes' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v1' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v2' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v3'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit','v4'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'kategoriaId' => 3]);
        teszt::create(['kerdes' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v1' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v2' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v3'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit','v4'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'kategoriaId' => 4]);
        teszt::create(['kerdes' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v1' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v2' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'v3'=> 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit','v4'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'kategoriaId' => 3]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
            $table->integer("numero");
            $table->string("comensal");
            // si esta disponible el valor es 1, si esta ocupado el valor es 0
            $table->boolean("disponible");
            $table->unsignedBigInteger("establecimiento_id");
            $table->timestamps();
            $table->foreign("establecimiento_id")->references("id")->on("establecimientos")->onDelete("cascade");
        });

        DB::table('mesas')->insert([
            // Establecimiento 1 - 8 mesas
            ['numero' => 1, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 1],
            ['numero' => 2, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 1],
            ['numero' => 3, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 1],
            ['numero' => 4, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 1],
            ['numero' => 5, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 1],
            ['numero' => 6, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 1],
            ['numero' => 7, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 1],
            ['numero' => 8, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 1],
        
            // Establecimiento 2 - 6 mesas
            ['numero' => 1, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 2],
            ['numero' => 2, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 2],
            ['numero' => 3, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 2],
            ['numero' => 4, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 2],
            ['numero' => 5, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 2],
            ['numero' => 6, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 2],
        
            // Establecimiento 3 - 7 mesas
            ['numero' => 1, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 3],
            ['numero' => 2, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 3],
            ['numero' => 3, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 3],
            ['numero' => 4, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 3],
            ['numero' => 5, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 3],
            ['numero' => 6, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 3],
            ['numero' => 7, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 3],
        
            // Establecimiento 4 - 10 mesas
            ['numero' => 1, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 4],
            ['numero' => 2, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 4],
            ['numero' => 3, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 4],
            ['numero' => 4, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 4],
            ['numero' => 5, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 4],
            ['numero' => 6, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 4],
            ['numero' => 7, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 4],
            ['numero' => 8, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 4],
            ['numero' => 9, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 4],
            ['numero' => 10, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 4],
        
            // Establecimiento 5 - 5 mesas
            ['numero' => 1, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 5],
            ['numero' => 2, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 5],
            ['numero' => 3, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 5],
            ['numero' => 4, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 5],
            ['numero' => 5, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 5],
        
            // Establecimiento 6 - 9 mesas
            ['numero' => 1, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 6],
            ['numero' => 2, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 6],
            ['numero' => 3, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 6],
            ['numero' => 4, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 6],
            ['numero' => 5, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 6],
            ['numero' => 6, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 6],
            ['numero' => 7, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 6],
            ['numero' => 8, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 6],
            ['numero' => 9, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 6],
        
            // Establecimiento 7 - 6 mesas
            ['numero' => 1, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 7],
            ['numero' => 2, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 7],
            ['numero' => 3, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 7],
            ['numero' => 4, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 7],
            ['numero' => 5, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 7],
            ['numero' => 6, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 7],
        
            // Establecimiento 8 - 8 mesas
            ['numero' => 1, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 8],
            ['numero' => 2, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 8],
            ['numero' => 3, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 8],
            ['numero' => 4, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 8],
            ['numero' => 5, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 8],
            ['numero' => 6, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 8],
            ['numero' => 7, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 8],
            ['numero' => 8, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 8],
        
            // Establecimiento 9 - 7 mesas
            ['numero' => 1, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 9],
            ['numero' => 2, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 9],
            ['numero' => 3, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 9],
            ['numero' => 4, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 9],
            ['numero' => 5, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 9],
            ['numero' => 6, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 9],
            ['numero' => 7, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 9],
        
            // Establecimiento 10 - 10 mesas
            ['numero' => 1, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 10],
            ['numero' => 2, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 10],
            ['numero' => 3, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 10],
            ['numero' => 4, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 10],
            ['numero' => 5, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 10],
            ['numero' => 6, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 10],
            ['numero' => 7, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 10],
            ['numero' => 8, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 10],
            ['numero' => 9, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 10],
            ['numero' => 10, 'comensal' => '', 'disponible' => true, 'establecimiento_id' => 10],
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesas');
    }
};

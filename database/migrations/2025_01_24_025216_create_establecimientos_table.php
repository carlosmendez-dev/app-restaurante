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
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("direccion");
            $table->string("telefono");
            $table->timestamps();
        });

        DB::table('establecimientos')->insert([
            ['nombre' => 'Café de la Plaza', 'direccion' => 'Plaza Mayor, Madrid', 'telefono' => '+34 91 123 45 67'],
            ['nombre' => 'La Taberna del Barrio', 'direccion' => 'Calle de la Luna, Madrid', 'telefono' => '+34 91 234 56 78'],
            ['nombre' => 'Restaurante El Mar', 'direccion' => 'Calle de la Marina, Barcelona', 'telefono' => '+34 93 123 45 67'],
            ['nombre' => 'La Casa de las Tapas', 'direccion' => 'Avenida Diagonal, Barcelona', 'telefono' => '+34 93 234 56 78'],
            ['nombre' => 'Bodega San Sebastián', 'direccion' => 'Calle del Laurel, Logroño', 'telefono' => '+34 941 123 45 67'],
            ['nombre' => 'La Cueva del Flamenco', 'direccion' => 'Calle de la Feria, Sevilla', 'telefono' => '+34 95 434 56 78'],
            ['nombre' => 'Restaurante La Paella', 'direccion' => 'Avenida de las Artes, Valencia', 'telefono' => '+34 96 123 45 67'],
            ['nombre' => 'Bar El Rincón', 'direccion' => 'Calle de la Costa, Málaga', 'telefono' => '+34 95 123 45 67'],
            ['nombre' => 'El Asador del Norte', 'direccion' => 'Calle de Bilbao, Bilbao', 'telefono' => '+34 94 123 45 67'],
            ['nombre' => 'La Pizzeria Roma', 'direccion' => 'Calle de Goya, Zaragoza', 'telefono' => '+34 97 123 45 67']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establecimientos');
    }
};

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
        Schema::create('platillos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->decimal("precio",2);
            $table->timestamps();
        });

        DB::table('platillos')->insert([
            ['nombre' => 'Paella Valenciana', 'precio' => 15.99],
            ['nombre' => 'Tortilla Española', 'precio' => 7.50],
            ['nombre' => 'Croquetas de Jamón', 'precio' => 6.20],
            ['nombre' => 'Gazpacho Andaluz', 'precio' => 5.80],
            ['nombre' => 'Ensalada César', 'precio' => 8.90],
            ['nombre' => 'Pisto Manchego', 'precio' => 9.00],
            ['nombre' => 'Arroz con Mariscos', 'precio' => 18.50],
            ['nombre' => 'Bocadillo de Calamares', 'precio' => 6.90],
            ['nombre' => 'Pulpo a la Gallega', 'precio' => 12.30],
            ['nombre' => 'Sopa de Ajo', 'precio' => 5.50],
            ['nombre' => 'Albóndigas Caseras', 'precio' => 10.00],
            ['nombre' => 'Churros con Chocolate', 'precio' => 4.00],
            ['nombre' => 'Tarta de Santiago', 'precio' => 4.50],
            ['nombre' => 'Ensalada de Tomate y Atún', 'precio' => 7.20],
            ['nombre' => 'Bacalao al Pil Pil', 'precio' => 14.70],
            ['nombre' => 'Fideuá', 'precio' => 16.00],
            ['nombre' => 'Tarta de Queso', 'precio' => 5.30],
            ['nombre' => 'Chistorra a la Parrilla', 'precio' => 8.60],
            ['nombre' => 'Cochinillo Asado', 'precio' => 22.00],
            ['nombre' => 'Tinto de Verano', 'precio' => 3.50],
            ['nombre' => 'Sangría', 'precio' => 7.00],
            ['nombre' => 'Café con Leche', 'precio' => 2.00],
            ['nombre' => 'Vino Rioja', 'precio' => 12.50],
            ['nombre' => 'Cerveza Estrella', 'precio' => 2.50],
            ['nombre' => 'Champán Cava', 'precio' => 20.00],
            ['nombre' => 'Flan Casero', 'precio' => 3.60],
            ['nombre' => 'Mojos Canarios', 'precio' => 5.00],
            ['nombre' => 'Tarta de Manzana', 'precio' => 5.80],
            ['nombre' => 'Piquillos Rellenos', 'precio' => 11.20],
            ['nombre' => 'Merluza a la Vasca', 'precio' => 16.50],
            ['nombre' => 'Revuelto de Setas', 'precio' => 9.40],
            ['nombre' => 'Cordero Lechal', 'precio' => 21.50],
            ['nombre' => 'Bacalao a la Vizcaína', 'precio' => 17.00],
            ['nombre' => 'Ensalada Caprese', 'precio' => 8.30],
            ['nombre' => 'Timbal de Verduras', 'precio' => 7.10],
            ['nombre' => 'Tortas de Aceite', 'precio' => 3.00],
            ['nombre' => 'Mousse de Chocolate', 'precio' => 4.40],
            ['nombre' => 'Piquillos con Atún', 'precio' => 8.80],
            ['nombre' => 'Tarta de Chocolate', 'precio' => 4.20],
            ['nombre' => 'Calamares Rellenos', 'precio' => 12.00],
            ['nombre' => 'Queso Manchego', 'precio' => 11.50],
            ['nombre' => 'Salmorejo', 'precio' => 6.30],
            ['nombre' => 'Timbal de Arroz', 'precio' => 9.10],
            ['nombre' => 'Tartar de Atún', 'precio' => 15.00],
            ['nombre' => 'Pinchos Morunos', 'precio' => 8.00],
            ['nombre' => 'Patatas Bravas', 'precio' => 5.00],
            ['nombre' => 'Piquillos con Chistorra', 'precio' => 9.80],
            ['nombre' => 'Solomillo de Ternera', 'precio' => 18.20],
            ['nombre' => 'Huevo Estrellado', 'precio' => 7.50],
            ['nombre' => 'Salmón a la Parrilla', 'precio' => 16.80],
            ['nombre' => 'Paella de Mariscos', 'precio' => 19.00],
            ['nombre' => 'Sopa de Marisco', 'precio' => 11.00],
            ['nombre' => 'Risotto de Setas', 'precio' => 14.60],
            ['nombre' => 'Arroz a la Cubana', 'precio' => 9.30],
            ['nombre' => 'Pechuga de Pollo', 'precio' => 8.20],
            ['nombre' => 'Ensalada Mixta', 'precio' => 6.50],
            ['nombre' => 'Tarta de Frambuesa', 'precio' => 5.00],
            ['nombre' => 'Ceviche', 'precio' => 14.40],
            ['nombre' => 'Rabo de Toro', 'precio' => 18.00],
            ['nombre' => 'Vino Albariño', 'precio' => 13.30],
            ['nombre' => 'Lentejas con Chorizo', 'precio' => 8.50],
            ['nombre' => 'Piquillos Rellenos de Marisco', 'precio' => 13.00],
            ['nombre' => 'Hojaldre de Manzana', 'precio' => 4.80],
            ['nombre' => 'Churros con Nata', 'precio' => 3.30],
            ['nombre' => 'Tarta de Frutas', 'precio' => 5.20],
            ['nombre' => 'Marmitako', 'precio' => 14.00],
            ['nombre' => 'Paté Casero', 'precio' => 9.60],
            ['nombre' => 'Cachopo', 'precio' => 16.10],
            ['nombre' => 'Tarta de Limón', 'precio' => 4.90],
            ['nombre' => 'Piquillos Rellenos de Carne', 'precio' => 10.50],
            ['nombre' => 'Mollejas a la Plancha', 'precio' => 12.40],
            ['nombre' => 'Costillas a la Barbacoa', 'precio' => 17.30],
            ['nombre' => 'Pulpo a la Parrilla', 'precio' => 18.90],
            ['nombre' => 'Canelones Rellenos', 'precio' => 11.90],
            ['nombre' => 'Pasta a la Boloñesa', 'precio' => 9.50],
            ['nombre' => 'Pizza Margarita', 'precio' => 11.00],
            ['nombre' => 'Pizza Hawaiana', 'precio' => 11.50],
            ['nombre' => 'Pizza Pepperoni', 'precio' => 12.00],
            ['nombre' => 'Pizza Vegetariana', 'precio' => 12.50],
            ['nombre' => 'Ensalada de Pollo', 'precio' => 8.40],
            ['nombre' => 'Lasaña', 'precio' => 13.20],
            ['nombre' => 'Macarrones con Tomate', 'precio' => 6.40],
            ['nombre' => 'Pasta Carbonara', 'precio' => 10.10],
            ['nombre' => 'Ravioli', 'precio' => 12.80],
            ['nombre' => 'Sopa de Verduras', 'precio' => 5.90],
            ['nombre' => 'Huevos Rellenos', 'precio' => 7.80],
            ['nombre' => 'Berenjenas Rellenas', 'precio' => 10.30],
            ['nombre' => 'Salmón al Horno', 'precio' => 16.90],
            ['nombre' => 'Pechuga de Pavo', 'precio' => 11.70],
            ['nombre' => 'Ensalada de Frutas', 'precio' => 5.60],
            ['nombre' => 'Patatas a lo Pobre', 'precio' => 4.70],
            ['nombre' => 'Tarta de Chocolate y Naranja', 'precio' => 5.40],
            ['nombre' => 'Croissant Relleno', 'precio' => 3.70],
            ['nombre' => 'Tarta de Arándano', 'precio' => 5.10],
            ['nombre' => 'Tarta de Coco', 'precio' => 4.60],
            ['nombre' => 'Frittata', 'precio' => 9.20],
            ['nombre' => 'Alitas de Pollo', 'precio' => 7.90],
            ['nombre' => 'Chuletillas de Cordero', 'precio' => 20.40],
            ['nombre' => 'Burrito', 'precio' => 8.70],
            ['nombre' => 'Ensalada de Remolacha', 'precio' => 6.60],
            ['nombre' => 'Tacos', 'precio' => 9.80],
            ['nombre' => 'Quesadillas', 'precio' => 7.00],
            ['nombre' => 'Sopa de Fideos', 'precio' => 5.30],
            ['nombre' => 'Albondigas con Patatas', 'precio' => 8.90],
            ['nombre' => 'Chorizo a la Sidra', 'precio' => 10.90],
            ['nombre' => 'Cordero a la Menta', 'precio' => 19.30],
            ['nombre' => 'Paella Mixta', 'precio' => 16.80],
            ['nombre' => 'Mariscada', 'precio' => 21.40],
            ['nombre' => 'Mojos Verdes', 'precio' => 4.10],
            ['nombre' => 'Tortilla de Patatas', 'precio' => 6.40],
            ['nombre' => 'Gambas a la Plancha', 'precio' => 15.60],
            ['nombre' => 'Chistorra al Vino', 'precio' => 7.30],
            ['nombre' => 'Pisto con Huevo', 'precio' => 8.60],
            ['nombre' => 'Sopa de Lentejas', 'precio' => 6.10],
            ['nombre' => 'Berenjenas a la Parmesana', 'precio' => 10.20],
            ['nombre' => 'Couscous', 'precio' => 7.70],
            ['nombre' => 'Pollo al Curry', 'precio' => 14.50],
            ['nombre' => 'Pizza de Pollo', 'precio' => 12.60],
            ['nombre' => 'Galletas de Mantequilla', 'precio' => 3.10],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platillos');
    }
};

<?php

use App\Models\Szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->integer('temaId');
            $table->timestamps();
        });

        Szavak::create([
            'angol'=>'flower',
            'magyar'=>'virág',
            'temaId'=>1
        ]);

        Szavak::create([
            'angol'=>'garden',
            'magyar'=>'kert',
            'temaId'=>1
        ]);

        Szavak::create([
            'angol'=>'homework',
            'magyar'=>'házi feladat',
            'temaId'=>2
        ]);

        Szavak::create([
            'angol'=>'classroom',
            'magyar'=>'tanterem',
            'temaId'=>2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};

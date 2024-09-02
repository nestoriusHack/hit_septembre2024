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
        Schema::create('preinscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenaissance');
            $table->string('nationalite');
            $table->string('adresse');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('domaine');
            $table->string('niveau');
            $table->string('photo');
            $table->string('profile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preinscriptions');
    }
};

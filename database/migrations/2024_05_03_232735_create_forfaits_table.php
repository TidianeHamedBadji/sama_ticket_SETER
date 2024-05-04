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
        Schema::create('forfaits', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['Standard','Exclusif','Abonnement']);
            $table->enum('tarifs',['500','1000','1500','25OO','3500']);
            $table->enum('zone',['zone1','zone2','zone3'])->default('zone1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forfaits');
    }
};

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
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('badge')->nullable(); // e.g. 'STARTER', 'BEST VALUE', 'ENTERPRISE'
            $table->string('subtitle')->nullable();
            $table->string('price'); // e.g. '1,5', '3,5', '7'
            $table->string('price_unit')->default('Juta');
            $table->string('icon')->default('rocket-launch');
            $table->boolean('is_popular')->default(false);
            $table->string('popular_badge_text')->nullable()->default('PALING DIMINATI');
            $table->json('features')->nullable();
            $table->string('button_text')->default('PILIH PAKET');
            $table->string('button_url')->default('#kontak');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('root_cause_analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('non_conformity_id')->constrained()->onDelete('cascade');
            $table->text('analysis_method');
            $table->json('analysis_data');
            $table->text('conclusion');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('root_cause_analyses');
    }
};

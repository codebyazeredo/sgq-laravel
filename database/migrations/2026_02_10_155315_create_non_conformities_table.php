<?php

use App\Enums\SeverityLevelEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('non_conformities', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('evidence');
            $table->date('occurrence_date');
            $table->enum('severity', SeverityLevelEnum::cases());
            $table->foreignId('reported_by')->constrained('users');
            $table->foreignId('identified_in_document_id')->nullable()->constrained('documents');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('non_conformities');
    }
};

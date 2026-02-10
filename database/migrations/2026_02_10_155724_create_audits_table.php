<?php

use App\Enums\AuditStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('scheduled_date');
            $table->foreignId('lead_auditor_id')->constrained('users');
            $table->enum('status', AuditStatusEnum::cases())->default(AuditStatusEnum::PLANNED->value);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audits');
    }
};

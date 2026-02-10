<?php

use App\Enums\ActionStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('action_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('non_conformity_id')->nullable()->constrained();
            $table->string('description'); 
            $table->text('reason');        
            $table->string('location');  
            $table->foreignId('responsible_id')->constrained('users'); 
            $table->date('due_date');      
            $table->decimal('cost', 10, 2)->default(0);
            $table->enum('status', ActionStatusEnum::cases())->default(ActionStatusEnum::PENDING->value);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('action_plans');
    }
};

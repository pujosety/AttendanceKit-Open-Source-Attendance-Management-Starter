<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('attendance_id')->nullable()->constrained(null, 'id')->nullOnDelete();
            $table->date('date');
            $table->string('title');
            $table->text('content');
            $table->timestamps();

            $table->unique(['user_id', 'date'], 'reports_user_date_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};


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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->nullable(true);
            $table->integer('teacher_id')->nullable(true);
            $table->string('file')->nullable(true);
            $table->string('description')->nullable(true);
            $table->date('task_date')->nullable(true);
            $table->date('submission_date')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};

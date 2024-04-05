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
        Schema::create('noticeboards', function (Blueprint $table) {
            $table->id();
            $table->integer('created_by')->nullable(true);
            $table->string('title')->nullable(true);
            $table->date('notice_date')->nullable(true);
            $table->date('publish_date')->nullable(true);
            $table->string('message')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticeboards');
    }
};

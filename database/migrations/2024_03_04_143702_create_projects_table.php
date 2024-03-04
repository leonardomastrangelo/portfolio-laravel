<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('slug', 70);
            $table->text('description');
            $table->boolean('status');
            $table->string('preview', 255);
            $table->string('logo', 255);
            $table->string('type', 50);
            $table->string('github', 255);
            $table->string('link', 255);
            $table->boolean('team');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

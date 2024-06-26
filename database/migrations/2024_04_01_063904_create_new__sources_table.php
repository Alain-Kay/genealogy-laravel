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
        Schema::create('new__sources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('team_id')->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('date')->nullable();
            $table->integer('is_active')->nullable();
            $table->foreignId('author_id')->constrained('authors')->nullable();
            $table->foreignId('repository_id')->constrained('repositories')->nullable();
            $table->foreignId('publication_id')->constrained('publications')->nullable();
            $table->foreignId('type_id')->constrained('types')->nullable();
            $table->string('sour')->nullable();
            $table->text('titl')->nullable();
            $table->string('auth')->nullable();
            $table->string('data')->nullable();
            $table->text('text')->nullable();
            $table->text('publ')->nullable();
            $table->string('abbr')->nullable();
            $table->string('group')->nullable();
            $table->integer('gid')->nullable();
            $table->string('quay')->nullable();
            $table->text('page')->nullable();
            $table->string('rin')->nullable();
            $table->string('note')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new__sources');
    }
};

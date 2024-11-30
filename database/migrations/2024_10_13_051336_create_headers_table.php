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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('about_title')->nullable();
            $table->text('about_note')->nullable();
            $table->text('management_title')->nullable();
            $table->string('management_note')->nullable();
            $table->string('certification_title')->nullable();
            $table->text('certification_note')->nullable();
            $table->string('collection_title')->nullable();
            $table->string('collection_note')->nullable();
            $table->string('client_title')->nullable();
            $table->string('client_note')->nullable();
            $table->string('career_title')->nullable();
            $table->string('career_note')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_note')->nullable();
            $table->string('industry_title')->nullable();
            $table->string('industry_note')->nullable();
            $table->text('blog_title')->nullable();
            $table->string('blog_note')->nullable();
            $table->text('key_title')->nullable();
            $table->string('key_note')->nullable();
            $table->text('footer_title')->nullable();
            $table->string('footer_note')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};

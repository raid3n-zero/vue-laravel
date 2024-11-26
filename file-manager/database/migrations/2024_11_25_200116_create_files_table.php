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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default(null);
            $table->string('name_generate')->default(null);
            $table->string('type')->default(null);
            $table->integer('size')->default(null);
            $table->unsignedBigInteger('folder_id')->default(null);
            $table->foreign('folder_id')->on('folders')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};

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
        Schema::create('menuses', function (Blueprint $table) {
            $table->id();  // Primary Key
            $table->string('name'); // Nama menu
            $table->text('description')->nullable(); // Deskripsi menu
            $table->decimal('price', 10, 2); // Harga menu
            $table->unsignedBigInteger('category_id'); // Foreign key
            $table->string('image')->nullable(); // Gambar menu (opsional)
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status menu
            $table->timestamps(); // Created at & Updated at

            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menuses');
    }
};

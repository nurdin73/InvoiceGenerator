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
        Schema::create('invoices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('no_invoice');
            $table->date('date_invoice')->useCurrent();
            $table->foreignId('client_id')->constrained('clients')->cascadeOnDelete();
            $table->string('currency')->default('Rp');
            $table->string('sign')->nullable();
            $table->date('sign_date')->useCurrent();
            $table->string('sign_name')->nullable();
            $table->text('note')->nullable();
            $table->text('term_condition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
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
        Schema::create('donation_info', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('donatorname');
            $table->string('email')->unique();
            $table->integer('amount')->unsigned();
            $table->text('message')->nullable();
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation_info');
    }
};

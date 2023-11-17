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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('state', ['active', 'running', 'done', 'cancel']);
            $table->string('pairs', 6);
            $table->boolean('action');
            $table->string('timeframe', 5);
            $table->float('entry', 12, 5);
            $table->float('stop_loss', 12, 5);
            $table->float('take_profit_1', 12, 5);
            $table->float('take_profit_2', 12, 5);
            $table->tinyInteger('stop_loss_status')->default(0);
            $table->tinyInteger('take_profit_1_status')->default(0);
            $table->tinyInteger('take_profit_2_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

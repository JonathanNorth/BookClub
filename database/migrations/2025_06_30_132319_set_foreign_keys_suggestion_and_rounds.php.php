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

        Schema::table('rounds', function(Blueprint $table){
            $table->foreignId('judge_id')
                ->constrained('users')
                ->onDelete('cascade');

            $table->foreign('winning_suggestion')
                ->references('id')
                ->on('suggestion')
                ->onDelete('cascade')
                ->nullable();
        });

        Schema::table('suggestion', function(Blueprint $table){
            $table->foreign('round_id')
                ->references('id')
                ->on('rounds')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

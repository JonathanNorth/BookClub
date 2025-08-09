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
            $table->dropForeign(['winning_suggestion']);
            $table->unsignedBigInteger('winning_suggestion')->nullable()->change();
            $table->foreign('winning_suggestion')->references('id')->on('suggestions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suggestions', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['round_id']);
            
            // Make the column non-nullable again
            $table->unsignedBigInteger('round_id')->nullable(false)->change();
            
            // Re-add the foreign key constraint
            $table->foreign('round_id')->references('id')->on('rounds');
        });
    }
};

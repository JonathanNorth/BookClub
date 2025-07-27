<?php

use App\Models\Book;
use App\Models\User;
use App\Models\Judge;
use App\Models\Round;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('suggestions', function (Blueprint $table) {
            $table->foreignIdFor(Book::class);
            $table->foreignIdFor(Round::class);
            $table->foreignIdFor(User::class);
        });

        Schema::table('rounds', function (Blueprint $table) {
            $table->unsignedBiGInteger('winning_suggestion');
            $table->foreign('winning_suggestion')->references('id')->on('suggestions');

            $table->foreignId('judge_id')->constrained('judges');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suggestions', function (Blueprint $table) {
            $table->dropForeign(('book_id'));
            $table->dropForeign(['round_id']);
            $table->dropForeign(['user_id']);

            $table->dropColumn(['book_id', 'round_id', 'user_id']);
        });

        Schema::table('rounds', function (Blueprint $table) {
            $table->dropForeign(['winning_suggestion']);
            $table->dropForeign(['judge_id']);

            $table->dropColumn(['winning_suggestion', 'judge_id']);
        });
    }
};

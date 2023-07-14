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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recipient_id');
            $table->unsignedBigInteger('owner_id');

            $table->foreign('recipient_id')->references('id')->on('users');
            $table->foreign('owner_id')->references('id')->on('users');

            $table->text('finalfeedback');
            $table->text('improvementpoints');
            $table->text('maintainpoints');
            $table->text('suggestions');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};

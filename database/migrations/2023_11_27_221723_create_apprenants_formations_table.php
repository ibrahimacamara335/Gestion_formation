<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apprenants_formations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('apprenants_id')->unsigned();
            $table->unsignedBiginteger('formations_id')->unsigned();
            $table->foreign('apprenants_id')->references('id')
                ->on('apprenants')->onDelete('cascade');
            $table->foreign('formations_id')->references('id')
                ->on('formations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprenants_formations');
    }
};

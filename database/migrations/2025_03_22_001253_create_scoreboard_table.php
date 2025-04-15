<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('scoreboard', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign Key
            $table->bigInteger('score')->index(); // Indexed Score Column
            $table->timestamps(); // Created_at & Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('scoreboard');
    }
};

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
        Schema::create('user_lists', function (Blueprint $table) {
            $table->id();
            $table->string('list_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       $startYear = 2020;
       $endYear = 2025;
      
       for ($year = $startYear; $year <= $endYear; $year++) {
        UserList::create([
            'list_name' => 'Gjenerata ' . $year
        ]);               
       }
       
    }
};

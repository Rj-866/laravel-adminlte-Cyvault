<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('fake_monthly_recap', function (Blueprint $table) {
        $table->id();
        $table->string('month');
        $table->integer('revenue');
        $table->integer('expenses');
        $table->integer('profit');
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fake_monthly_recap');
    }
};

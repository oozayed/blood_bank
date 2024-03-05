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
        Schema::table('donation_requests', function (Blueprint $table) {
            $table->integer('governorate_id')->unsigned();
            $table->foreign('governorate_id')->references('id')->on('governorates')
                ->onDelete('no action')
                ->onUpdate('no action');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('donation_requests', function (Blueprint $table) {
            //
        });
    }
};

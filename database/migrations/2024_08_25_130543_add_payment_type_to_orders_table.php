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
        Schema::table('orders', function (Blueprint $table) {
            // Adding the 'payment_type' column after 'address'
            $table->string('payment_status')->nullable()->after('address')->default('cash on delivery');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Dropping the 'payment_type' column if this migration is rolled back
            $table->dropColumn('payment_type');
        });
    }
};

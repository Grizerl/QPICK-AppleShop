<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table): void {
            $table->string('brand')->after('availability');
            $table->string('year_of_issue')->after('brand');
            $table->string('weight')->after('year_of_issue');
            $table->string('device_color')->after('weight');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table): void {
            $table->dropColumn('brand');
            $table->dropColumn('year_of_issue');
            $table->dropColumn('weight');
            $table->dropColumn('device_color');
        });
    }
};

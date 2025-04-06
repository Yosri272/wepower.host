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
    Schema::table('payment_gateways', function (Blueprint $table) {
        $table->string('public_key')->nullable()->after('title');
        $table->string('secret_key')->nullable()->after('public_key');
        $table->string('api_key')->nullable()->after('secret_key');
    });
}

public function down()
{
    Schema::table('payment_gateways', function (Blueprint $table) {
        $table->dropColumn(['public_key', 'secret_key', 'api_key']);
    });
}

};

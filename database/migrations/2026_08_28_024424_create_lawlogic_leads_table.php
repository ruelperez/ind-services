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
        Schema::create('lawlogic_leads', function (Blueprint $table) {
            $table->id();

            $table->string('key')->nullable();
            $table->string('code')->default('SSDICalls');

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email')->nullable();

            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state', 2)->nullable();
            $table->string('zip', 10)->nullable();

            $table->string('attorney')->nullable();
            $table->string('benefit_status')->nullable();
            $table->string('between_50_and_63')->nullable();
            $table->string('work_history')->nullable();
            $table->string('medical_condition')->nullable();

            $table->string('ip_address', 45)->nullable();
            $table->string('sub_id2')->nullable();
            $table->string('special_route')->nullable();

            $table->string('type')->nullable();

            $table->string('xx_tf_token')->nullable();
            $table->string('xx_tf_cert_url')->nullable();
            $table->string('xx_tf_ping_url')->nullable();

            $table->longText('share_url')->nullable();
            $table->longText('unique_url')->nullable();

            $table->boolean('api_status')->default(false);
            $table->string('lead_id')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawlogic_leads');
    }
};

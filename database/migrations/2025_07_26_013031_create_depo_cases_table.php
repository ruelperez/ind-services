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
        Schema::create('depo_cases', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('depo_provera_taken');
            $table->string('depo_provera_use');
            $table->string('diagnosis');
            $table->string('attorney');
            $table->string('injury');
            $table->longText('description');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('email');
            $table->string('zip_code');
            $table->string('user_ip');
            $table->string('xx_tf_token');
            $table->string('xx_tf_cert_url');
            $table->string('xx_tf_ping_url');
            $table->longText('share_url')->nullable();
            $table->longText('unique_url')->nullable();
            $table->boolean('api_status')->default('0');
            $table->boolean('has_redirect_url')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depo_cases');
    }
};

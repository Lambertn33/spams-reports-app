<?php

use App\Models\SpamReport;
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
        Schema::create('spam_reports', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sourceIdentityId');
            $table->uuid('referenceId');
            $table->uuid('referenceResourceId');

            $table->string('message')->nullable();
            $table->string('source')->default(SpamReport::SOURCE);

            $table->boolean('isBlocked')->default(false);

            $table->enum('state', SpamReport::REPORT_STATES);
            $table->enum('reportType', SpamReport::REPORT_TYPES);
            $table->enum('referenceResourceType', SpamReport::REPORT_REFERENCE_TYPES);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spam_reports');
    }
};

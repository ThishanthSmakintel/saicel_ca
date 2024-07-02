<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('replies', function (Blueprint $table) {
            // Add status column
            $table->string('status')->default('pending');

            // Add confirmation_email_sent column
            $table->boolean('confirmation_email_sent')->default(false);

            // Add soft delete column
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('replies', function (Blueprint $table) {
            // Remove columns if needed in reverse migration
            $table->dropColumn('status');
            $table->dropColumn('confirmation_email_sent');
            $table->dropSoftDeletes();
        });
    }
}

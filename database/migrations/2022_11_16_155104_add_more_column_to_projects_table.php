<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
            $table->foreignId('language_id')->after('image');
            $table->foreignId('framework_id')->after('language_id');
            $table->foreignId('library_id')->after('framework_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
            $table->dropColumn('language_id');
            $table->dropColumn('framework_id');
            $table->dropColumn('library_id');
        });
    }
};

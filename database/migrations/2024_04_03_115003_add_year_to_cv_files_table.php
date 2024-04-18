<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddYearToCvFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cv_files', function (Blueprint $table) {
            $table->string('year')->after('filier'); // Add 'filier' column after 'file_path'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cv_files', function (Blueprint $table) {
            $table->dropColumn('year'); // Drop 'filier' column if migration is rolled back
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToImagesTable extends Migration
{
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->string('description')->nullable()->after('file_path');
            $table->string('titre')->nullable()->after('description');
            $table->string('activity')->nullable()->after('titre');
            $table->string('titre_activity')->nullable()->after('activity');
        });
    }

    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('titre');
            $table->dropColumn('activity');
            $table->dropColumn('titre_activity');
        });
    }
}

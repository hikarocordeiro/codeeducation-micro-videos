<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->string('thumb_file')->nullable();
            $table->string('banner_file')->nullable();
            $table->string('trailer_file')->nullable();
            $table->string('video_file')->nullable();           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->dropColumn('thumb_file');
            $table->dropColumn('banner_file');
            $table->dropColumn('trailer_file');
            $table->dropColumn('video_file');
        });
    }
}

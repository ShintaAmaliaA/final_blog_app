<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagesColumnToPostpromosTable extends Migration
{
    public function up()
    {
        Schema::table('postpromos', function (Blueprint $table) {
            $table->string('images')->nullable();
        });
    }

    public function down()
    {
        Schema::table('postpromos', function (Blueprint $table) {
            $table->dropColumn('images');
        });
    }
}

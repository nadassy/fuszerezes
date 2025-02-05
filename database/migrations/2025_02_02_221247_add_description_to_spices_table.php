<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToSpicesTable extends Migration
{
    public function up()
    {
        Schema::table('spices', function (Blueprint $table) {
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('spices', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}

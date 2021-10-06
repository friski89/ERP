<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEduIdToEducationalBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('educational_backgrounds', function (Blueprint $table) {
            $table->unsignedBigInteger('edu_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('educational_backgrounds', function (Blueprint $table) {
            $table->dropColumn('edu_id');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignsEduIdToEducationalBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('educational_backgrounds', function (Blueprint $table) {
            $table
                ->foreign('edu_id')
                ->references('id')
                ->on('edus')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
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
            $table->dropForeign(['edu_id']);
        });
    }
}

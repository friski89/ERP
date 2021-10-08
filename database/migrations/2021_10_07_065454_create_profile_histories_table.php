<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profile_id');
            $table->string('gender', 20);
            $table->string('phone_number', 20);
            $table->string('blood_group', 5);
            $table->string('no_ktp', 20);
            $table->string('no_npwp', 20);
            $table->text('address_ktp');
            $table->text('address_domisili');
            $table->text('status_domisili');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table
                ->foreign('profile_id')
                ->references('id')
                ->on('profiles')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
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
        //Schema::dropIfExists('profile_histories');

        Schema::table('profile_histories', function (Blueprint $table) {
            $table->dropIfExists('profile_histories');
            $table->dropForeign(['profile_id']);
            $table->dropForeign(['user_id']);
        });
    }
}

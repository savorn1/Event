<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id');
            $table->foreign('event_id')
            ->references('event_id')->on('event_users')->onDelete('cascade');
            $table->integer('user_id_inviter');
            $table->foreign('user_id_inviter')
                ->references('id')->on('users')->onDelete('cascade');
            $table->integer('user_id_invited');
            $table->foreign('user_id_invited')
                ->references('id')->on('users')->onDelete('cascade');
            $table->string('activity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}

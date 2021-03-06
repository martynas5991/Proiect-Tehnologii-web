<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_child');
            $table->string('name');
            $table->string('description');
            $table->string('type');
            $table->string('accident_type');
            $table->double('location_x',20,15);
            $table->double('location_y',20,15);
            $table->timestamp('happened_at');
            $table->integer('dynamic_added');
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
        Schema::dropIfExists('notifications');
    }
}

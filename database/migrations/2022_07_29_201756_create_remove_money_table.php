<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemoveMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remove_money', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('users');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('user_paypal');
            $table->string('status');
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
        Schema::dropIfExists('remove_money');
    }
}

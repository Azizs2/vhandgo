<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('support_id');
            $table->unsignedBigInteger('donation_id');
            $table->unsignedBigInteger('effort_id');
            $table->unsignedBigInteger('investasi_id');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('admins');
            $table->foreign('support_id')->references('id')->on('supports');
            $table->foreign('donation_id')->references('id')->on('donations');
            $table->foreign('effort_id')->references('id')->on('efforts');
            $table->foreign('investasi_id')->references('id')->on('investasis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}

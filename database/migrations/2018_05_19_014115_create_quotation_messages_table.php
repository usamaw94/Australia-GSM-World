<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('phone');
            $table->string('suburb');
            $table->string('postcode');
            $table->string('message_subject');
            $table->string('message');
            $table->string('msg_status');
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
        Schema::dropIfExists('quotation_messages');
    }
}

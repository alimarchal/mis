<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('user_id');
            $table->date('due_date')->nullable();
            $table->string('no_of_installment',5)->nullable();
            $table->string('markup',15)->nullable();
            $table->string('insurance',15)->nullable();
            $table->string('principal',20)->nullable();
            $table->string('outstanding_principal',20)->nullable();
            $table->date('payment_date')->nullable();
            $table->string('delayed_days',10)->nullable();
            $table->string('category_of_default',100)->nullable();
            $table->string('status',100)->nullable();
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
        Schema::dropIfExists('installments');
    }
}

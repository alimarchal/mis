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
            $table->date('payment_date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('no_of_installment',100)->nullable();
            $table->string('days_pass_overdue',100)->nullable();
            $table->string('principle_amount_a',100)->nullable();
            $table->string('markup_amount_b',100)->nullable();
            $table->string('penalty_charges_c',100)->nullable();
            $table->string('total_installment_a_b_c',100)->nullable();
            $table->string('category_of_default',100)->nullable();
            $table->string('status',100)->nullable();
            $table->string('principal_left',100)->nullable();
            $table->string('adjustment_recovery_principal_amount',100)->nullable();
            $table->string('partial_cash_recovery',100)->nullable();
            $table->string('user_id',100)->nullable();
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

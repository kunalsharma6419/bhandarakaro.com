<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_payments', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('tracking_id');
            $table->string('bank_ref_no');
            $table->string('order_status');
            $table->string('failure_message')->nullable();
            $table->string('payment_mode');
            $table->string('card_name');
            $table->string('status_code')->nullable();
            $table->string('status_message');
            $table->string('currency');
            $table->decimal('amount', 10, 2);
            $table->string('billing_name');
            $table->string('billing_address');
            $table->string('billing_city');
            $table->string('billing_state');
            $table->string('billing_zip');
            $table->string('billing_country');
            $table->string('billing_tel');
            $table->string('billing_email');
            $table->string('delivery_name');
            $table->string('delivery_address');
            $table->string('delivery_city');
            $table->string('delivery_state');
            $table->string('delivery_zip');
            $table->string('delivery_country');
            $table->string('delivery_tel');
            $table->text('merchant_param1')->nullable();
            $table->text('merchant_param2')->nullable();
            $table->text('merchant_param3')->nullable();
            $table->text('merchant_param4')->nullable();
            $table->text('merchant_param5')->nullable();
            $table->char('vault', 1);
            $table->string('offer_type')->nullable();
            $table->string('offer_code')->nullable();
            $table->decimal('discount_value', 10, 2);
            $table->decimal('mer_amount', 10, 2);
            $table->string('eci_value')->nullable();
            $table->char('retry', 1);
            $table->string('response_code')->nullable();
            $table->text('billing_notes')->nullable();
            $table->timestamp('trans_date');
            $table->string('bin_country');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_payments');
    }
}

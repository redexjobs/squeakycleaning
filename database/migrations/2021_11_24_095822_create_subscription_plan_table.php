<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_plan', function (Blueprint $table) {
            $table->id();
			$table->longText('name')->nullable();
			$table->longText('type')->nullable();
			$table->longText('price')->nullable();
			$table->longText('description')->nullable();
			$table->longText('total_days')->nullable();
			$table->enum('status',['1', '0'])->default('1');
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
        Schema::dropIfExists('subscription_plan');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
			$table->longText('admin_email')->nullable();
			$table->longText('header_logo')->nullable();
			$table->longText('header_contact_details')->nullable();
			$table->longText('footer_logo')->nullable();
			$table->longText('footer_description')->nullable();
			$table->longText('footer_social_media')->nullable();
			$table->longText('footer_copyright')->nullable();
			$table->longText('footer_contact_details')->nullable();
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
        Schema::dropIfExists('setting');
    }
}

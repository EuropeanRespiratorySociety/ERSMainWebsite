<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CloudCmsToken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('token');
            $table->string('refresh_token');
            $table->string('expires_in');
            $table->boolean('has_expired');
        }
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tokens');
    }
    
}

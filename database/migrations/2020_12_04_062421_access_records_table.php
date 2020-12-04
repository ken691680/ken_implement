<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccessRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_records', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('articles_id')->comment('articles_id');
            $table->string('users_ip')->nullable()->comment('瀏覽者Ip');
            $table->string('users_ua')->nullable()->comment('瀏覽者Ua');
            $table->string('users_header')->nullable()->comment('瀏覽者header');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_records');

    }
}

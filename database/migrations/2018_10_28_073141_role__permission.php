<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RolePermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permission', function(Blueprint $table) {
            $table->BigIncrements('id');
            $table->BigInteger('role_id')->unsigned();
            $table->BigInteger('permission_id')->unsigned();

            $table->foreign('permission_id')->references('id')->on('permission');
            $table->foreign('role_id')->references('id')->on('role');
            $table->index(['role_id','permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permission');
    }
}

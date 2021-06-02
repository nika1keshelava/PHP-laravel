<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("MyUsers",function (Blueprint $table){
            $table->id();
            $table->string("Username");
            $table->string("Email");
            $table->string("FirstName");
            $table->string("LastName");
            $table->boolean("AdminOrNot");
            $table->timestamp("UserCreatedAt");
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
        Schema::dropIfExists('MyUsers');

    }
}

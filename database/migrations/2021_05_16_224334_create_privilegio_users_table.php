<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivilegioUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilegio_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_usuario')->unsigned()->index();
            $table->bigInteger('id_permissao')->unsigned()->index();
            $table->bigInteger('id_grupo')->unsigned()->index();
            $table->string('estado');
            $table->timestamps();
        });

        Schema::table('privilegio_users', function (Blueprint $table) {
            $table->foreign('id_usuario')->reference('id')->on('usuarios')->onUpdate('cascade');
            $table->foreign('id_permissao')->reference('id')->on('permissaos')->onUpdate('cascade');
            $table->foreign('id_grupo')->reference('id')->on('grupos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privilegio_users');
    }
}
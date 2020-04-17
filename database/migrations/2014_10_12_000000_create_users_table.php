<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('detalhe_empresa_id');
            $table->string('email_login', 45);
            $table->string('senha', 45);
            $table->increments('id');

            $table->index(["detalhe_empresa_id"], 'fk_table1_DETALHES_EMPRESA1_idx');

            $table->unique(["senha"], 'senha_UNIQUE');

            $table->unique(["email_login"], 'email_login_UNIQUE');

            $table->integer('detalhe_empresa_id', 'fk_table1_DETALHES_EMPRESA1_idx')->unsigned();
            $table->foreign('detalhe_empresa_id', 'fk_table1_DETALHES_EMPRESA1_idx')
                ->references('id')->on('detalhes_empresas')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}

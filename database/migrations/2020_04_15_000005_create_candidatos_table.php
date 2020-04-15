<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'candidatos';

    /**
     * Run the migrations.
     * @table candidatos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 45);
            $table->date('data_nascimento');
            $table->string('nacionalidade', 45);
            $table->string('endereco', 45);
            $table->string('redes_sociais', 45);
            $table->string('documento', 45);
            $table->string('experiencias', 45);
            $table->string('formacao', 45);
            $table->string('qualificacao', 45);
            $table->string('objetivo', 45)->nullable();
            $table->string('genero', 45);
            $table->string('sobrenome', 45);
            $table->string('sobre', 45)->nullable();
            $table->string('idade', 45);
            $table->string('estado_civil', 45);
            $table->string('area_de_interesse', 45);
            $table->string('experiencia_empresa', 45)->nullable();
            $table->string('experiencia_cargo', 45)->nullable();
            $table->date('experiencia_data_inicio')->nullable();
            $table->date('experiencia_data_termino')->nullable();
            $table->string('experiencia_descricao_cargo', 45)->nullable();
            $table->string('formacao_instituicao', 45)->nullable();
            $table->date('formacao_data_inicio')->nullable();
            $table->date('formacao_data_termino')->nullable();
            $table->string('formacao_descricao', 45)->nullable();
            $table->integer('usuario_id');

            $table->index(["usuario_id"], 'fk_candidatos_USUARIO11_idx');

            $table->unique(["id"], 'ID_UNIQUE');

            $table->unique(["data_nascimento"], 'data_nascimento_UNIQUE');


            $table->foreign('usuario_id', 'fk_candidatos_USUARIO11_idx')
                ->references('id')->on('users')
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

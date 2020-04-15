<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatoVagaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'candidato_vaga';

    /**
     * Run the migrations.
     * @table candidato_vaga
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('vaga_id');
            $table->integer('candidato_id');
            $table->string('nome_cadidato', 45);

            $table->index(["vaga_id"], 'fk_VAGAS_has_CANDIDATOS_VAGAS_idx');

            $table->index(["candidato_id"], 'fk_VAGAS_has_CANDIDATOS_CANDIDATOS1_idx');


            $table->foreign('vaga_id', 'fk_VAGAS_has_CANDIDATOS_VAGAS_idx')
                ->references('id')->on('vagas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('candidato_id', 'fk_VAGAS_has_CANDIDATOS_CANDIDATOS1_idx')
                ->references('id')->on('candidatos')
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

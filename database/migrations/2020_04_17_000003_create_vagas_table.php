<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'vagas';

    /**
     * Run the migrations.
     * @table vagas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('empresa_id');
            $table->string('area_de_atuacao', 2000)->nullable();
            $table->string('descricao', 45)->nullable();
            $table->string('idioma_requerido', 45)->nullable();
            $table->string('portugues', 45);
            $table->string('ingles', 45);
            $table->string('espanhol', 45);
            $table->string('frances', 45);
            $table->string('outros', 45);

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
       Schema::dropIfExists($this->tableName);
     }
}

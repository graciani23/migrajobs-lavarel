<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalhesEmpresasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'detalhes_empresas';

    /**
     * Run the migrations.
     * @table detalhes_empresas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('razao_social', 45);
            $table->string('imagem', 45)->nullable();
            $table->string('cnpj', 45);
            $table->string('endereco', 45)->nullable();
            $table->string('area_de_atuacao', 45)->nullable();
            $table->string('linkedin', 45);
            $table->string('instagram', 45);
            $table->string('facebook', 45);
            $table->string('cep', 45);
            $table->string('city', 45);
            $table->string('uf', 45);
            $table->string('rua', 45);
            $table->string('numero', 45);
            $table->string('complemento', 45);
            $table->unsignedInteger('users_id');


            $table->index(["users_id"], 'fk_detalhes_empresas_users1_idx');

            $table->unique(["cnpj"], 'cnpj_UNIQUE');



            $table->foreign('users_id', 'fk_detalhes_empresas_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');  
              
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

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
            $table->string('image', 45)->nullable();
            $table->string('name', 45);
            $table->string('nationality', 45);
            $table->string('about_you', 200);
            $table->date('birth');
            $table->date('age');
            $table->string('genre_female', 8);
            $table->string('genre_male', 9);
            $table->string('status', 45);
            $table->string('document', 45);
            $table->integer('zip_code');
            $table->string('city', 45);
            $table->string('uf', 2);
            $table->string('adress', 45);
            $table->integer('number');
            $table->string('complement', 45)->nullable();
            $table->integer('telephone')->nullable();
            $table->integer('cell_phone')->nullable();
            $table->string('linkedin', 45)->nullable();
            $table->string('instagram', 45)->nullable();;
            $table->string('facebook', 45)->nullable();
            $table->string('professional_goal', 200)->nullable();
            $table->string('areas',45);
            $table->string('professional_experience', 45)->nullable();
            $table->string('company', 45)->nullable();
            $table->string('job_role', 45)->nullable();
            $table->string('month', 20)->nullable();
            $table->string('year', 20)->nullable();
            $table->string('job_description', 200)->nullable();
            $table->string('instution', 45)->nullable();
            $table->string('formation', 45)->nullable();
            $table->string('course_description', 45)->nullable();
            $table->unsignedInteger('usuario_id');

            $table->timestamps();

            $table->index(["usuario_id"], 'fk_candidatos_USUARIO11_idx');

            //$table->unique(["id"], 'ID_UNIQUE');

            //$table->unique(["document"], 'document_UNIQUE');


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

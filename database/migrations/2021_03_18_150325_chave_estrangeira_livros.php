<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChaveEstrangeiraLivros extends Migration
{
    /** COMMIT */
    public function up() {
        Schema::table('livros', function (Blueprint $table) {
            //Altera o tipo da coluna
            $table->unsignedBigInteger('categoria_id')->change();
            //Chave Estrangeira
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /** ROLLBACK */
    public function down() {
        Schema::table('livros', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
            //$table->integer('categoria_id')->change();
        });
    }
}

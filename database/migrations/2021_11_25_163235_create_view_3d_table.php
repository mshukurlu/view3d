<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateView3dTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_3d', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->charset='utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id')->startingValue('10835');
            $table->date('date')->index();
            #there is no native way setting length of integer
            $table->integer('playerId')->unsigned()->index();
            $table->integer('agentId')->unsigned()->index();
            $table->char('currency',3);
            $table->decimal('bet',10,2)->nullable();
            $table->decimal('win',10,2)->nullable();
            $table->decimal('rake',10,2)->nullable();
            $table->decimal('tournament',10,2)->nullable();
            $table->decimal('net',10,2);
            $table->decimal('fin',10,2)->nullable();
            $table->string('aams_ticket',40);
            $table->string('aams_table',40);
            $table->timestamps();
        });
            #there is no native way on laravel to set integer length
        DB::statement('ALTER TABLE view_3d MODIFY COLUMN playerId INTEGER (7) , MODIFY COLUMN agentId INTEGER (7)');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_3d');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCodesTable
 *
 * http://genealogy.about.com/library/weekly/aa110100d.htm
 * http://fideloper.com/laravel-multiple-database-connections
 * http://stackoverflow.com/questions/31847054/how-to-use-multiple-database-in-laravel
 * http://phpgedview.sourceforge.net/ged551-5.pdf
 */

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::connection('global')->create('codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->text('description');
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
        Schema::connection('global')->drop('codes');
    }
}

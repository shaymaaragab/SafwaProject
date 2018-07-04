<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddToContactusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('contactus', function($table) {
            $table->string('how')->nullable();
            $table->string('namehow')->nullable();
            $table->string('disabiltytype')->nullable();
            $table->string('age')->nullable();
            $table->string('weight')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contactus', function($table) {
            $table->dropColumn('how');
            $table->dropColumn('namehow');
            $table->dropColumn('disabiltytype');
            $table->dropColumn('age');
            $table->dropColumn('weight');
        });
    }
}

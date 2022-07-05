<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCloumnNameParentProfleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parent_profiles', function (Blueprint $table) {
            $table->renameColumn('first_name', 'parent_first_name');
            $table->renameColumn('last_name', 'parent_last_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parent_profiles', function (Blueprint $table) {
            //
        });
    }
}

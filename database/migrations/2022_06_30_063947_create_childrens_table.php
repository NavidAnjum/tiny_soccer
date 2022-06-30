<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_profile_id')->unsigned()->unique();
            $table->foreign('parent_profile_id')->references('id')->on('parent_profiles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->date('date_of_birth');
            $table->string('allergies',200);
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
        Schema::dropIfExists('childrens');
    }
}

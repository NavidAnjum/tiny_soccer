<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_statuses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('children_id')->unsigned()->unique();
            $table->string('venue','100');
            $table->enum('class',['Dids', 'Mids','Bigs']);
            $table->enum('status',['Waiting', 'Active','Disabled']);
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
        Schema::dropIfExists('child_statuses');
    }
}

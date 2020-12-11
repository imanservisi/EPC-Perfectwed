<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
/*
* Run the migrations.
*
* @return void
*/
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('title_project');
            $table->date('wed_date');
            $table->string('wed_city')->nullable();
            $table->integer('wed_postal_code')->nullable();
            $table->string('wed_address')->nullable();
            $table->float('budget')->default('0');
            $table->float('menu') ->default('0');
            $table->float('hair')->default('0');
            $table->float('ring')->default('0');
            $table->float('makeup')->default('0');
            $table->float('decoration')->default('0');
            $table->float('wine')->default('0');
            $table->float('transport')->default('0');
            $table->float('animation')->default('0');
            $table->float('place_price')->default('0');
            $table->float('photo')->default('0');
            $table->float('costume')->default('0');
            $table->float('announcement')->default('0');
            $table->float('nb_guest')->default('0');
            $table->float('ceremony')->default('0');
            $table->float('flower')->default('0');
            $table->float('other')->default('0');
            $table->boolean('activated')->default(true);
            $table->timestamps();
        });
    }

/*
* Reverse the migrations.
*
* @return void
*/
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}

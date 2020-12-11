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
            $table->double('budget')->default('0');
            $table->double('menu') ->default('0');
            $table->double('hair')->default('0');
            $table->double('ring')->default('0');
            $table->double('makeup')->default('0');
            $table->double('decoration')->default('0');
            $table->double('wine')->default('0');
            $table->double('transport')->default('0');
            $table->double('animation')->default('0');
            $table->double('place_price')->default('0');
            $table->double('photo')->default('0');
            $table->double('costume')->default('0');
            $table->double('announcement')->default('0');
            $table->double('nb_guest')->default('0');
            $table->double('ceremony')->default('0');
            $table->double('flower')->default('0');
            $table->double('other')->default('0');
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

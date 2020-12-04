<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
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
            $table->float('budget')->nullable();
            $table->float('menu')->nullable();
            $table->float('hair')->nullable();
            $table->float('ring')->nullable();
            $table->float('makeup')->nullable();
            $table->float('decoration')->nullable();
            $table->float('wine')->nullable();
            $table->float('transport')->nullable();
            $table->float('animation')->nullable();
            $table->float('place_price')->nullable();
            $table->float('photo')->nullable();
            $table->float('costume')->nullable();
            $table->float('announcement')->nullable();
            $table->float('nb_guest')->nullable();
            $table->float('ceremony')->nullable();
            $table->float('flower')->nullable();
            $table->float('other')->nullable();
            $table->boolean('activated')->default(true);
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
        Schema::dropIfExists('projects');
    }
}

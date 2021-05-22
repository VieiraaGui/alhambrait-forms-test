<?php

use App\Models\People;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('step_form' , array_keys(\App\Models\People::STEP_FORM));
            $table->enum('status_form', array_keys(\App\Models\People::STATUS_FORM));
            $table->string('name');
            $table->date('birthday');
            $table->string('cep');
            $table->string('address');
            $table->string('number');
            $table->string('city');
            $table->string('state');
            $table->string('tel');
            $table->string('cellphone');
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
        Schema::dropIfExists('people');
    }
}

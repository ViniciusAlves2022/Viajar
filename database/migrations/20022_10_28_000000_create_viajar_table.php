<?php



use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;



return new class extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('Gastronomia', function (Blueprint $table) {

            $table->id();

            $table->string('modelo');

            $table->string('marca');

            $table->string('ano');

            $table->string('mês');

            $table->string('valor');

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

        Schema::dropIfExists('Viajar');

    }

};
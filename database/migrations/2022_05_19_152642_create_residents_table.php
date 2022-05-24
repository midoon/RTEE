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
        Schema::create('residents', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->id();
            $table->foreignId('family_id');
            $table->string("nik");
            $table->string("nama");
            $table->enum("jenis_kelamin",["L","P"]);
            $table->text("alamat");
            $table->text("profesi");
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
        Schema::dropIfExists('residents');
    }
};

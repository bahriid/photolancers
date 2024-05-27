<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('photographer_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();

            $table->string('name');
            $table->text('description');

            $table->decimal('price', 20, 2);
            $table->integer('discount');

            $table->integer('duration');
            $table->string('camera');
            $table->string('lenses');
            $table->string('media');
            $table->integer('edited_photo');
            $table->boolean('raw_photo');

            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
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
        Schema::dropIfExists('packages');
    }
};

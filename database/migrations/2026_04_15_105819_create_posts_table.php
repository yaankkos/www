<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->integer('likes')->default(0);
            $table->timestamps(); // создаёт created_at и updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->text('content');
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });
    }
    public function down() { Schema::dropIfExists('messages'); }
};
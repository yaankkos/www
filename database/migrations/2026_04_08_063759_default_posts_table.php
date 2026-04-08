<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
            Schema::table('posts', function (Blueprint $table) {
        $table->string('desc')->default('some value')->change();
    });
    }

    
    public function down(): void
    {
        Schema::create('posts', function (Blueprint $table) {
		$table->string('desc')->default('some value');
	});
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\DBAL\TimestampType;
return new class extends Migration
{

    public function up(): void
    {
       Schema::table('posts', function (Blueprint $table) {
			$table->string('title', 100)->change();
		});
    }

  
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        if (!Schema::hasColumn('posts', 'desc')) {
    $table->string('desc', 255)->comment('my comment');
}

    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
           
            if (!Schema::hasColumn('posts', 'content')) {
                $table->text('content')->after('title');
            }
            
            
            if (!Schema::hasColumn('posts', 'slug')) {
                $table->string('slug')->nullable()->after('content');
            }
            
            
            if (!Schema::hasColumn('posts', 'deleted_at')) {
                $table->softDeletes();
            }
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['content', 'slug', 'deleted_at']);
        });
    }
};
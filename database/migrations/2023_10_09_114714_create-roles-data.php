<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement ("INSERT INTO `roles` (`id`,`name`) VALUES
    (1,'visitor'),
    (2,'register'),
    (3,'teacher'),
    (4,'administrator')");
    }g

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

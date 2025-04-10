<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('registration_entries', function (Blueprint $table) {
            $table->unique('email');
        });
    }
    
    public function down()
    {
        Schema::table('registration_entries', function (Blueprint $table) {
            $table->dropUnique(['email']);
        });
    }
    
};

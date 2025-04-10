<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateAdminsTable extends Migration
{
    public function up()
{
    Schema::create('admins', function (Blueprint $table) {
        $table->id();
        $table->string('username')->unique();
        $table->string('password');
        $table->timestamps();
    });

    // Add the default admin user after the table is created
    DB::table('admins')->insert([
        'username' => 'dilg_admin',
        'password' => Hash::make('hsi12345'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}


    public function down()
    {
        Schema::dropIfExists('admins');
    }
}

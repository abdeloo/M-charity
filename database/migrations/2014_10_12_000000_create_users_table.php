<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('city');
            $table->string('phone');
            $table->string('adhesion state');                   
            $table->rememberToken();
            $table->timestamps();      
        });

        DB::statement('ALTER TABLE users ADD CONSTRAINT chk_etat_adhération CHECK (etat_adhération = "Rejeté" Or etat_adhération = "En cours de traitement" Or etat_adhération = "Acceptée");');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        // Cria o banco se ele não existir
    
    }

    public function down()
    {
        // Cuidado: isso deletaria o banco!
        // DB::statement('DROP DATABASE IF EXISTS apolo_tcc');
    }
};
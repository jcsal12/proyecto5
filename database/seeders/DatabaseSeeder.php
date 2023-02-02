<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self::seedTabla();
        $this->command->alert('Tabla inicializada con datos!');
    }

    private function seedTabla(){
        DB::table('users') -> delete();
        DB::table('users') ->insert([
            'id' => 1,
            'name' =>'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users') ->insert([
            'id' => 2,
            'name' =>'prueba',
            'email' => 'prueba@prueba.com',
            'password' => bcrypt('123456'),
        ]);
    }
}

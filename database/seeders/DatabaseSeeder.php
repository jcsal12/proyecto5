<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Customer;
use App\Models\Order;

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
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        DB::table('orders')->truncate();
        DB::table('customers')->truncate();
        DB::table('users')->truncate();
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

        User::factory(10)
        ->has(Customer::factory()
        ->has(Order::factory()->count(3))
        ->count(2))
        ->create();

        Model::reguard();

        Schema::enableForeignKeyConstraints();
    }
}

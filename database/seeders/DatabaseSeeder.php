<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

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

        DB::table('role_user')->truncate();
        DB::table('roles')->truncate();
        DB::table('orders')->truncate();
        DB::table('customers')->truncate();
        DB::table('users')->truncate();

        $userAdmin = User::create([
            'name' => env('ADMIN_NAME', 'admin'),
            'email' => env('ADMIN_EMAIL', 'admin@admin.es'),
            'password' => Hash::make(env('ADMIN_PASSWORD', '123456')),
            'email_verified_at' => now()
        ]);

        $roleAdmin = Role::create([
            'name' => 'Admin'
        ]);

        $roleCustomer = Role::create([
            'name' => 'Customer'
        ]);

        $userAdmin->roles()->attach($roleAdmin->id);

        $userCustomers = User::factory(10)
        ->has(Customer::factory()
        ->has(Order::factory()->count(3))
        ->count(1))
        ->create();

        foreach ($userCustomers as $userCustomer) {
            $userCustomer->roles()->attach($roleCustomer->id);
        }

        Model::reguard();
        Schema::enableForeignKeyConstraints();
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Libros;
use App\Models\Categorie;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use Illuminate\Support\Facades\Http;


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
        //$this->command->alert('Tabla inicializada con datos!');
    }

    private function seedTabla(){
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        DB::table('role_user')->truncate();
        DB::table('roles')->truncate();
        DB::table('orders')->truncate();
        DB::table('customers')->truncate();
        DB::table('users')->truncate();
        DB::table('libros')->truncate();
        DB::table('categories')->truncate();
        DB::table('locations')->truncate();

        $userAdmin = User::create([
            'id' => 1,
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

        $categorias = [
            "matematicas",
            "lengua",
            "sociales",
            "biologia",
            "quimica",
        ];

        foreach ($categorias as $categoria) {
            DB::table('categories')->insert([
                'name' => $categoria,
            ]);
        }

        $comunidadesAutonomas = [
            "Andalucía",
            "Aragón",
            "Asturias",
            "Baleares",
            "Canarias",
            "Cantabria",
            "Castilla y León",
            "Castilla-La Mancha",
            "Cataluña",
            "Comunidad Valenciana",
            "Extremadura",
            "Galicia",
            "Madrid",
            "Murcia",
            "Navarra",
            "País Vasco",
            "La Rioja",
        ];

        foreach ($comunidadesAutonomas as $comunidad) {
            DB::table('locations')->insert([
                'name' => $comunidad,
            ]);
        }

        $userCustomers = User::factory($numUsuarios = 10)
        ->has(Customer::factory()
        ->has(Order::factory()->count(3))
        ->count(1))
        ->create();

        foreach ($userCustomers as $userCustomer) {
            $userCustomer->roles()->attach($roleCustomer->id);
        }

        self::tablaLibros($numUsuarios);

        Model::reguard();
        Schema::enableForeignKeyConstraints();
    }

    private static function tablaLibros($numUsuarios){
        $categorias = Categorie::all();
        foreach ($categorias as $categoria) {
            $peticion = $categoria->name;
            $categoriaId = $categoria->id;
            self::getLibros($peticion, $categoriaId, $numUsuarios);
        }
    }

    private static function getLibros($peticion, $categoriaId, $numUsuarios){
        $urlApi = "https://api.wallapop.com/api/v3/general/search?keywords=libros+".$peticion;
        $response = Http::get($urlApi);
        $res = json_decode($response->collect())->search_objects;
        foreach ($res as $libro) {
            Libros::create([
                'title' => $libro->title,
                'description' => $libro->description,
                'price' => $libro->price,
                'currency' => $libro->currency,
                'images' => $libro->images[0]->large,
                'user_id' => rand(3, $numUsuarios),
                'categorie_id' => $categoriaId,
                'location_id' => rand(1, 17)
            ]);
        }
    }



}




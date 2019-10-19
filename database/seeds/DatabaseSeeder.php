<?php

use Illuminate\Database\Seeder;
use App\taller;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
    // La creación de datos de roles debe ejecutarse primero
    $this->call(RoleTableSeeder::class);
    // Los usuarios necesitarán los roles previamente generados
    $this->call(UserTableSeeder::class);
    // Los talleres necesitan los usuarios cargados 
    $this->call(TallerTableSeeder::class);
    // los Horarios necesitan los talleres cargados
    $this->call(HorarioTableSeeder::class);

    }
}

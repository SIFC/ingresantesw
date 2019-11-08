<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $role = new Role();
        // $role->name = 'admin';
        // $role->description = 'Administrator';
        // $role->save();

        // $role = new Role();
        // $role->name = 'user';
        // $role->description = 'User';
        // $role->save();

        $role = new Role();
        $role->name = 'alumno';
        $role->description = 'Alumno';
        $role->save();

        $role = new Role();
        $role->name = 'profesor';
        $role->description = 'Profesor';
        $role->save();

        $role = new Role();
        $role->name = 'coordinador';
        $role->description = 'Coordinador';
        $role->save();
    }
}

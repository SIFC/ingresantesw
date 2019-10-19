<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // $role_user = Role::where('name', 'user')->first();
        // $role_admin = Role::where('name', 'admin')->first();
        $role_alumno = Role::where('name', 'alumno')->first();
        $role_profesor = Role::where('name', 'profesor')->first();

        // $user = new User();
        // $user->name = 'User';
        // $user->nombre = '';
        // $user->apellido = '';
        // $user->dni = '';
        // $user->lu = '';
        // $user->email = 'user@example.com';
        // $user->password = bcrypt(12345678);
        // $user->save();
        // $user->roles()->attach($role_user);

        // $user = new User();
        // $user->name = 'Admin';
        // $user->nombre = '';
        // $user->apellido = '';
        // $user->dni = '';
        // $user->lu = '';
        // $user->email = 'admin@example.com';
        // $user->password = bcrypt(12345678);
        // $user->save();
        // $user->roles()->attach($role_admin);

// ----------------------------------- Alumnos -----------------------------------------------------
        $user = new User();
        $user->name = 'Alumno Flor';
        $user->nombre = 'Florencia';
        $user->apellido = 'Cabrera';
        $user->dni = '36112457';
        $user->lu = '43882';
        $user->email = 'alumno1@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_alumno);

        $user = new User();
        $user->name = 'Alumno Andre';
        $user->nombre = 'Andrea';
        $user->apellido = 'Cabrera';
        $user->dni = '36112458';
        $user->lu = '43883';
        $user->email = 'alumno2@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_alumno);

        $user = new User();
        $user->name = 'Alumno Dustin';
        $user->nombre = 'Dustin';
        $user->apellido = 'Gasman';
        $user->dni = '36112459';
        $user->lu = '43884';
        $user->email = 'alumno3@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_alumno);
// ------------------------------------ Profesores ------------------------------------------------
        $user = new User();
        $user->name = 'Profesor Ivan';
        $user->nombre = 'Ivan';
        $user->apellido = 'Sambrana';
        $user->dni = '36112753';
        $user->lu = '44559';
        $user->email = 'profesor1@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_profesor);

        $user = new User();
        $user->name = 'Profesor Alejandro';
        $user->nombre = 'Alejandro';
        $user->apellido = 'Sambrana';
        $user->dni = '36112754';
        $user->lu = '44560';
        $user->email = 'profesor2@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_profesor);

        $user = new User();
        $user->name = 'Profesor Emanuel';
        $user->nombre = 'Emanuel';
        $user->apellido = 'Irrazabal';
        $user->dni = '36112756';
        $user->lu = '44561';
        $user->email = 'profesor3@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_profesor);
    }
}

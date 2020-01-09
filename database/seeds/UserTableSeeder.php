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
        // Eloquent::unguard();

        // $filePath = database_path('seeds/users.sql');

        // if (File::exists($filePath)) {
        //     DB::unprepared(file_get_contents($filePath));
        //     $this->command->info('Usuarios listos');
        // }
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_alumno = Role::where('name', 'alumno')->first();
        $role_profesor = Role::where('name', 'profesor')->first();
        $role_coordinador = Role::where('name', 'coordinador')->first();
        $user = new User();
        $user->name = 'User';
        $user->nombre = '';
        $user->apellido = '';
        $user->dni = '';
        $user->lu = '';
        $user->email = 'user@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->nombre = '';
        $user->apellido = '';
        $user->dni = '';
        $user->lu = '';
        $user->email = 'admin@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_admin);

// ----------------------------------- Alumnos -----------------------------------------------------
        $user = new User();
        $user->name = 'Alumno Flor';
        $user->nombre = 'Florencia';
        $user->apellido = 'Cabrera';
        $user->dni = '36112457';
        $user->lu = '43882';
        $user->email = 'alumno1@example.com';
        $user->password = bcrypt(12345678);
        $user->grupo = 1;
        $user->save();
        $user->roles()->attach($role_alumno);

        $user = new User();
        $user->name = 'Alumno Andre';
        $user->nombre = 'Andrea';
        $user->apellido = 'Cabrera';
        $user->grupo = 2;
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

        $user = new User();
        $user->name = 'Alumno Ivan';
        $user->nombre = 'Ivan';
        $user->apellido = 'Sambrana';
        $user->dni = '36112753';
        $user->lu = '44559';
        $user->grupo = '8';
        $user->email = 'sambranaivan@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_alumno);
// ------------------------------------ Profesores ------------------------------------------------
        $user = new User();
        $user->name = 'Prof. Germán Torres';
        $user->nombre = 'Germán';
        $user->apellido = 'Torres';
        $user->dni = '36112653';
        $user->lu = '44559';
        $user->email = 'gtorres@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_profesor);

        $user = new User();
        $user->name = 'Prof. Alexandra Rey';
        $user->nombre = 'Alexandra';
        $user->apellido = 'Rey';
        $user->dni = '36112754';
        $user->lu = '44560';
        $user->email = 'arey@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_profesor);


        $user = new User();
        $user->name = 'Prof. Agustina Ibarrola';
        $user->nombre = 'Agustina';
        $user->apellido = 'Ibarrola';
        $user->dni = '36112756';
        $user->lu = '44561';
        $user->email = 'Aibarrola@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_profesor);
        $user->roles()->attach($role_coordinador);

        $user = new User();
        $user->name = 'Prof. Alejandra Matoso';
        $user->nombre = 'Alejandra';
        $user->apellido = 'Matoso';
        $user->dni = '36112756';
        $user->lu = '44561';
        $user->email = 'amatoso@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_profesor);
        $user->roles()->attach($role_coordinador);

        $user = new User();
        $user->name = 'Prof. Mirta Fernandez';
        $user->nombre = 'Mirta';
        $user->apellido = 'Fernandez';
        $user->dni = '36112756';
        $user->lu = '44561';
        $user->email = 'mfernandez@example.com';
        $user->password = bcrypt(12345678);
        $user->save();
        $user->roles()->attach($role_profesor);
        $user->roles()->attach($role_coordinador);

    }
}

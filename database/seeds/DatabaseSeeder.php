<?php

use Illuminate\Database\Seeder;
use App\taller;
use App\horario;
use App\User;
use App\grupo_taller;
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
    $this->taller();
    // los Horarios necesitan los talleres cargados
    $this->horarios();

    $this->inscripciones();
    }

    public function inscripciones()
    {

    }

    public function horarios()
    {
        // Primer Semana
        // Matemática TM
        $turno_mañana = [1,2,3,4,5,8];
        $turno_tarde = [6,7,9];


        foreach ($turno_mañana as $grupo)
        {
            $horario = new horario();
            $horario->fechaTaller = '2020-02-03';
            $horario->dia = 1; // lunes
            $horario->horaInicio = '2020-02-03 8:00';
            $horario->horaFin = '2020-02-03 10:00';
            $horario->taller_id = '1'; //
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-04';
            $horario->dia = 2; // martes
            $horario->horaInicio = '2020-02-04 8:00';
            $horario->horaFin = '2020-02-04 10:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-05';
            $horario->dia = 3; // miercoles
            $horario->horaInicio = '2020-02-05 8:00';
            $horario->horaFin = '2020-02-05 10:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-06';
            $horario->dia = 4; // jueves
            $horario->horaInicio = '2020-02-06 8:00';
            $horario->horaFin = '2020-02-06 10:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-07';
            $horario->dia = 5; // viernes
            $horario->horaInicio = '2020-02-07 8:00';
            $horario->horaFin = '2020-02-07 10:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            //

            //Competencias Digitales TMediodia
            $horario = new horario();
            $horario->fechaTaller = '2020-02-03';
            $horario->dia = 1; // lunes
            $horario->horaInicio = '2020-02-03 10:30';
            $horario->horaFin = '2020-02-03 12:30';
            $horario->taller_id = '3';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-04';
            $horario->dia = 2; // nartes
            $horario->horaInicio = '2020-02-04 10:30';
            $horario->horaFin = '2020-02-04 12:30';
            $horario->taller_id = '3';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-05';
            $horario->dia = 3; // miercoles
            $horario->horaInicio = '2020-02-05 10:30';
            $horario->horaFin = '2020-02-05 12:30';
            $horario->taller_id = '3';
            $horario->grupo = $grupo; //
            $horario->save();
            // Gabinere/SAE
            $horario = new horario();
            $horario->fechaTaller = '2020-02-06';
            $horario->dia = 4; // jueves
            $horario->horaInicio = '2020-02-06 10:30';
            $horario->horaFin = '2020-02-06 12:30';
            $horario->taller_id = '4';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-07';
            $horario->dia = 5; // viernes
            $horario->horaInicio = '2020-02-07 10:30';
            $horario->horaFin = '2020-02-07 12:30';
            $horario->taller_id = '4';
            $horario->grupo = $grupo; //
            $horario->save();


            // segunda seman
            // Segunda Semana
            // Matemática TM
            $horario = new horario();
            $horario->fechaTaller = '2020-02-10';
            $horario->dia = 2; // martes
            $horario->horaInicio = '2020-02-10 8:00';
            $horario->horaFin = '2020-02-10 10:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-11';
            $horario->dia = 2; // martes
            $horario->horaInicio = '2020-02-11 8:00';
            $horario->horaFin = '2020-02-11 10:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-12';
            $horario->dia = 3; // miercoles
            $horario->horaInicio = '2020-02-12 8:00';
            $horario->horaFin = '2020-02-12 10:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-13';
            $horario->dia = 4; // jueves
            $horario->horaInicio = '2020-02-13 8:00';
            $horario->horaFin = '2020-02-13 10:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-14';
            $horario->dia = 5; // viernes
            $horario->horaInicio = '2020-02-14 8:00';
            $horario->horaFin = '2020-02-14 10:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            // Lectura de texto TMediodia
            $horario = new horario();
            $horario->fechaTaller = '2020-02-10';
            $horario->dia = 1; // lunes
            $horario->horaInicio = '2020-02-10 10:30';
            $horario->horaFin = '2020-02-10 12:30';
            $horario->taller_id = '2';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-11';
            $horario->dia = 2; // nartes
            $horario->horaInicio = '2020-02-11 10:30';
            $horario->horaFin = '2020-02-11 12:30';
            $horario->taller_id = '2';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-12';
            $horario->dia = 3; // miercoles
            $horario->horaInicio = '2020-02-12 10:30';
            $horario->horaFin = '2020-02-12 12:30';
            $horario->taller_id = '2';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-13';
            $horario->dia = 4; // jueves
            $horario->horaInicio = '2020-02-13 10:30';
            $horario->horaFin = '2020-02-13 12:30';
            $horario->taller_id = '2';
            $horario->grupo = $grupo; //
            $horario->save();
            // Integracion
            $horario = new horario();
            $horario->fechaTaller = '2020-02-14';
            $horario->dia = 5; // viernes
            $horario->horaInicio = '2020-02-14 10:30';
            $horario->horaFin = '2020-02-14 12:30';
            $horario->taller_id = '5';
            $horario->grupo = $grupo; //
            $horario->save();


        }


        foreach ($turno_tarde as $grupo) {
            // Matemática TT
            $horario = new horario();
            $horario->fechaTaller = '2020-02-03';
            $horario->dia = 1; // lunes
            $horario->horaInicio = '2020-02-03 16:00';
            $horario->horaFin = '2020-02-03 18:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-04';
            $horario->dia = 2; // martes
            $horario->horaInicio = '2020-02-04 16:00';
            $horario->horaFin = '2020-02-04 18:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-05';
            $horario->dia = 3; // miercoles
            $horario->horaInicio = '2020-02-05 16:00';
            $horario->horaFin = '2020-02-05 18:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-06';
            $horario->dia = 4; // jueves
            $horario->horaInicio = '2020-02-06 16:00';
            $horario->horaFin = '2020-02-06 18:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-07';
            $horario->dia = 5; // viernes
            $horario->horaInicio = '2020-02-07 16:00';
            $horario->horaFin = '2020-02-07 18:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            // **************************************************

            //Competencias Digitales TNoche
            $horario = new horario();
            $horario->fechaTaller = '2020-02-03';
            $horario->dia = 1; // lunes
            $horario->horaInicio = '2020-02-03 18:30';
            $horario->horaFin = '2020-02-03 20:30';
            $horario->taller_id = '3';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-04';
            $horario->dia = 2; // martes
            $horario->horaInicio = '2020-02-04 18:30';
            $horario->horaFin = '2020-02-04 20:30';
            $horario->taller_id = '3';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-05';
            $horario->dia = 3; // miercoles
            $horario->horaInicio = '2020-02-05 18:30';
            $horario->horaFin = '2020-02-05 20:30';
            $horario->taller_id = '3';
            $horario->grupo = $grupo; //
            $horario->save();
            // Gabinere/SAE
            $horario = new horario();
            $horario->fechaTaller = '2020-02-06';
            $horario->dia = 4; // jueves
            $horario->horaInicio = '2020-02-06 18:30';
            $horario->horaFin = '2020-02-06 20:30';
            $horario->taller_id = '4';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-07';
            $horario->dia = 5; // viernes
            $horario->horaInicio = '2020-02-07 18:30';
            $horario->horaFin = '2020-02-07 20:30';
            $horario->taller_id = '4';
            $horario->grupo = $grupo; //
            $horario->save();


            //
            // Matemática TT
            $horario = new horario();
            $horario->fechaTaller = '2020-02-10';
            $horario->dia = 1; // lunes
            $horario->horaInicio = '2020-02-10 16:00';
            $horario->horaFin = '2020-02-10 18:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-11';
            $horario->dia = 2; // martes
            $horario->horaInicio = '2020-02-11 16:00';
            $horario->horaFin = '2020-02-11 18:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-12';
            $horario->dia = 3; // miercoles
            $horario->horaInicio = '2020-02-12 16:00';
            $horario->horaFin = '2020-02-12 18:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-13';
            $horario->dia = 4; // jueves
            $horario->horaInicio = '2020-02-13 16:00';
            $horario->horaFin = '2020-02-13 18:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-14';
            $horario->dia = 5; // viernes
            $horario->horaInicio = '2020-02-14 16:00';
            $horario->horaFin = '2020-02-14 18:00';
            $horario->taller_id = '1';
            $horario->grupo = $grupo; //
            $horario->save();


            //Lectura de Texto TNoche
            $horario = new horario();
            $horario->fechaTaller = '2020-02-10';
            $horario->dia = 1; // lunes
            $horario->horaInicio = '2020-02-10 18:30';
            $horario->horaFin = '2020-02-10 20:30';
            $horario->taller_id = '2';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-11';
            $horario->dia = 2; // martes
            $horario->horaInicio = '2020-02-11 18:30';
            $horario->horaFin = '2020-02-11 20:30';
            $horario->taller_id = '2';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-12';
            $horario->dia = 3; // miercoles
            $horario->horaInicio = '2020-02-12 18:30';
            $horario->horaFin = '2020-02-12 20:30';
            $horario->taller_id = '2';
            $horario->grupo = $grupo; //
            $horario->save();

            $horario = new horario();
            $horario->fechaTaller = '2020-02-13';
            $horario->dia = 4; // jueves
            $horario->horaInicio = '2020-02-13 18:30';
            $horario->horaFin = '2020-02-13 20:30';
            $horario->taller_id = '2';
            $horario->grupo = $grupo; //
            $horario->save();
            //integracion
            $horario = new horario();
            $horario->fechaTaller = '2020-02-14';
            $horario->dia = 5; // viernes
            $horario->horaInicio = '2020-02-14 18:30';
            $horario->horaFin = '2020-02-14 20:30';
            $horario->taller_id = '5';
            $horario->grupo = $grupo; //
            $horario->save();
        }






    // *************************************************************************************************





    }
    // ******************************************************************
    public function taller()
    {
        //
        $taller = new taller();
        $taller->qr = 'codigo1';
        $taller->titulo = 'Matemática';
        $taller->contexto = '';
        $taller->objetivo = '';
        $taller->contenidos = '';
        $taller->metodologia = '';
        $taller->duracion = '20';

        $taller->save();

        $taller = new taller();
        $taller->qr = 'codigo2';
        $taller->titulo = 'Lectura y Compresiòn de Textos';
        $taller->contexto = '';
        $taller->objetivo = '';
        $taller->contenidos = '';
        $taller->metodologia = '';
        $taller->duracion = '8';

        $taller->save();

        $taller = new taller();
        $taller->qr = 'codigo3';
        $taller->titulo = 'Competencias Digitales';
        $taller->contexto = '';
        $taller->objetivo = '';
        $taller->contenidos = '';
        $taller->metodologia = '';
        $taller->duracion = '6';

        $taller->save();

        $taller = new taller();
        $taller->qr = 'codigo4';
        $taller->titulo = 'Gabinete Psicopedagógico';
        $taller->contexto = '';
        $taller->objetivo = '';
        $taller->contenidos = '';
        $taller->metodologia = '';
        $taller->duracion = '2';

        $taller->save();

        $taller = new taller();
        $taller->qr = 'codigo5';
        $taller->titulo = 'Integridad';
        $taller->contexto = '';
        $taller->objetivo = '';
        $taller->contenidos = '';
        $taller->metodologia = '';
        $taller->duracion = '2';

        $taller->save();
    }
}

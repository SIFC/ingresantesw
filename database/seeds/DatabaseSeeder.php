<?php

use Illuminate\Database\Seeder;
use App\taller;
use App\horario;
use App\User;
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
        User::find(1)->inscribir_taller(1);
        User::find(1)->inscribir_taller(2);
        User::find(1)->inscribir_taller(3);



        User::find(2)->inscribir_taller(2);
        User::find(2)->inscribir_taller(3);
        User::find(2)->inscribir_taller(4);


        User::find(3)->inscribir_taller(2);
        User::find(3)->inscribir_taller(3);
        User::find(3)->inscribir_taller(4);


        User::find(4)->inscribir_taller(2);
        User::find(4)->inscribir_taller(3);
        User::find(4)->inscribir_taller(4);

        User::find(5)->inscribir_taller(1);
        User::find(5)->inscribir_taller(2);

        User::find(5)->inscribir_taller(4);

        User::find(6)->inscribir_taller(1);
        User::find(6)->inscribir_taller(2);

        User::find(6)->inscribir_taller(4);
    }

    public function horarios()
    {
        //
        $horario = new horario();
        $horario->fechaTaller = '2020-02-15';
        $horario->dia = 'Lunes';
        $horario->horaInicio = '2019-01-01 9:00';
        $horario->horaFin = '2019-01-01 12:00';
        $horario->taller_id = '1';
        $horario->save();

        $horario = new horario();
        $horario->fechaTaller = '2020-02-16';
        $horario->dia = 'Martes';
        $horario->horaInicio = '2019-01-01 7:00';
        $horario->horaFin = '2019-01-01 10:00';
        $horario->taller_id = '2';
        $horario->save();

        $horario = new horario();
        $horario->fechaTaller = '2020-02-17';
        $horario->dia = 'Miercoles';
        $horario->horaInicio = '2019-01-01 14:00';
        $horario->horaFin = '2019-01-01 18:00';
        $horario->taller_id = '3';
        $horario->save();

        $horario = new horario();
        $horario->fechaTaller = '2020-02-18';
        $horario->dia = 'Lunes - Jueves';
        $horario->horaInicio = '2019-01-01 16:00';
        $horario->horaFin = '2019-01-01 12:00';
        $horario->taller_id = '4';
        $horario->save();
    }
    public function taller()
    {
        //
        $taller = new taller();
        $taller->qr = 'codigo1';
        $taller->titulo = 'Estrategias motivadoras para la enseñanza de la programación con PseInt';
        $taller->contexto = 'Asignatura: Elementos de Computación. Área de programación y desarrollo de
        software.';
        $taller->objetivo = 'Fortalecer y afianzar la enseñanza y aprendizaje de los fundamentos básicos.';
        $taller->contenidos = ' Algoritmia y pseudocódigo ejecutable';
        $taller->metodologia = 'Las clases se realizarán en la modalidad “frente a la máquina”. Los temas se
        presentarán con una breve exposición teórica';
        $taller->duracion = '9 hs. presenciales y 5 virtuales';
        $taller->ubicacion = '9 de julio ';
        $taller->aula = 'Magna';
        $taller->save();

        $taller = new taller();
        $taller->qr = 'codigo2';
        $taller->titulo = 'Desarrollo de Aplicaciones Móviles en Android Studio';
        $taller->contexto = 'Requerimientos específicos en el desarrollo de aplicaciones móviles con
        Android Studio/Ingeniería de Software I';
        $taller->objetivo = 'Proporcionar conceptos teóricos y prácticos que permitan disponer en el pc';
        $taller->contenidos = 'Introducción a las metodologías de desarrollo de Software Agile para Sistemas
        Móviles.';
        $taller->metodologia = 'El curso se desarrollará bajo la metodología teórico-práctico en donde se
        abarcarán los temas y de forma paralela se realizan las prácticas de aplicación';
        $taller->duracion = '15 hs presenciales y 5 hs de estudio independiente';
        $taller->ubicacion = '9 de julio ';
        $taller->aula = 'Laboratorio 1';
        $taller->save();

        $taller = new taller();
        $taller->qr = 'codigo3';
        $taller->titulo = 'IoT con Intel Galileo';
        $taller->contexto = 'Requerimientos específicos en el desarrollo de aplicaciones móviles con
        Android Studio/Ingeniería de Software I';
        $taller->objetivo = 'Proporcionar conceptos teóricos y prácticos que permitan disponer en el pc, el
        entorno de trabajo y las herramientas necesarias para desarrollar ';
        $taller->contenidos = 'Actividades teórico prácticas para dar respuesta a los
        interrogantes';
        $taller->metodologia = 'Se desarrollarán cinco encuentros teóricos-prácticos de 2 horas.
        Para la aprobación';
        $taller->duracion = '10 horas presenciales y 5 horas de trabajo independiente.';
        $taller->ubicacion = 'Campus ';
        $taller->aula = 'Magna';
        $taller->save();

        $taller = new taller();
        $taller->qr = 'codigo4';
        $taller->titulo = 'Herramientas colaborativas para el trabajo en equipo';
        $taller->contexto = 'Sistemas y Organizaciones';
        $taller->objetivo = 'Qué los cursantes:
         Logren identificar la importancia del trabajo en equipo en sus prácticas';
        $taller->contenidos = ' Diferenciación de nociones de grupo y equipo de trabajo.
        Características y condiciones para el trabajo en equipo.';
        $taller->metodologia = 'Se desarrollarán 5 encuentros teóricos-prácticos de 3 horas.
        Clases teórico-prácticas.';
        $taller->duracion = '15 horas presenciales y 3 horas de trabajo en la plataforma virtual.';
        $taller->ubicacion = 'Campus ';
        $taller->aula = 'Quimica 1';
        $taller->save();
    }
}

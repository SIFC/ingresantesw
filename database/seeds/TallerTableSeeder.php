<?php
use App\taller;
use Illuminate\Database\Seeder;

class TallerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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

<?php

use App\horario;
use Illuminate\Database\Seeder;

class HorarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $horario = new horario();
        $horario->fechaTaller = '2020-02-15';
        $horario->dia = 'Lunes';
        $horario->horaInicio = '9:00';
        $horario->horaFin = '12:00';
        $horario->taller_id = '1';

        $horario = new horario();
        $horario->fechaTaller = '2020-02-16';
        $horario->dia = 'Martes';
        $horario->horaInicio = '7:00';
        $horario->horaFin = '10:00';
        $horario->taller_id = '2';

        $horario = new horario();
        $horario->fechaTaller = '2020-02-17';
        $horario->dia = 'Miercoles';
        $horario->horaInicio = '14:00';
        $horario->horaFin = '18:00';
        $horario->taller_id = '3';

        $horario = new horario();
        $horario->fechaTaller = '2020-02-18';
        $horario->dia = 'Lunes - jueves';
        $horario->horaInicio = '16:00';
        $horario->horaFin = '120:00';
        $horario->taller_id = '4';
    }
}

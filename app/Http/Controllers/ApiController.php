<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\taller;
use App\horario;
use App\asistencia;
use Illuminate\Support\Carbon;

class ApiController extends Controller
{
    public function login(request $formdata)
    {
        $lu =  $formdata->get('lu');
        $dni =  $formdata->get('dni');

        $alumno = user::with(['roles'])->where(['lu'=>$lu,'dni'=>$dni])->first();
        $grupo = $alumno->grupo;
        $talleres = taller::with(['horarios'=> function($query) use ($grupo){
           $query->where('horarios.grupo',$grupo)->get();
        }])->get();


        foreach ($talleres as $taller)
        {
            foreach ($taller->horarios as $horario)
            {
                $asistencia = asistencia::where(['horario_id'=>$horario->id,'user_id'=>$alumno->id])->get();
                // $asistencia = asistencia::first();
                $horario['asistencia'] = $asistencia;
            }
        }

        $alumno['talleres'] = $talleres;



        if($alumno)
        {
            return response()->json($alumno,200);
        }
        else
        {
            $res = (object) ['data' => 'error'];
            return  response()->json($res, 400);
        }

    }

    public function presente(request $formdata)
    {
        /**Req

         * hora_timestamp
         * codigo_qr
         */

         $user = User::find($formdata->get('user_id'));
         $qr = $formdata->get('qr');
        //  echo $user->name;
        //  $taller = taller::where('qr',$formdata->get('qr'))->first();



        $time = floor($formdata->timestamp / 1000);

        $hora_real = Carbon::createFromTimestamp($time, 'America/Argentina/Buenos_Aires')->toDateTimeString();
        // sumar 20 minutos por lo de llegar temprano
        $hora = Carbon::createFromTimestamp($time +  (20 * 60), 'America/Argentina/Buenos_Aires')->toDateTimeString();
        // print $hora;

        $horario = horario::where(['codigo_qr'=>$qr,'grupo'=>$user->grupo])
                    ->where('horaInicio','<=', $hora)
                    ->where('horaFin','>=', $hora)->first();


                    if($horario->count())
                    {

                        $asistencia = asistencia::where(['horario_id'=>$horario->id,'user_id'=>$user->id])->first();
                        if($asistencia)
                        {
                            return response()->json((object) [
                                "data" => 'Ya figura presente'
                            ], 200);
                        }
                        else
                        {
                            $asistencia = new asistencia();
                            $asistencia->user_id = $user->id;
                            $asistencia->horario_id = $horario->id;
                            $asistencia->fechaAsistencia = $hora_real;
                            $asistencia->hora = $hora_real;
                            $asistencia->save();
                            return response()->json((object) [
                                "data" => 'Presente'
                            ], 200);
                        }

                    }
                    else {
                        return response('error', 400);
                    }

    }
}

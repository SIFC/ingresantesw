<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\taller;
use App\horario;
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
        //  echo $user->name;
         $taller = taller::where('qr',$formdata->get('qr'))->first();



        $hora = Carbon::createFromTimestamp(floor($formdata->fecha / 1000), 'America/Argentina/Buenos_Aires')->toDateTimeString();
        // $date = Carbon::createFromFormat('Y-m-d H:i:s', floor($formdata->timestamp / 1000), 'America/Argentina/Buenos_Aires');
        // return $hora;

         if($taller)
         {
            if($user->talleres->contains($taller))
            {
                // return $taller->horarios;
                $_taller =  $taller->horarios->where('horaInicio','<=', $hora)->where('horaFin','>=', $hora)->first();
                if($_taller)
                {
                   return response("presente",200);
                }
                else
                {
                    return response("Fuera de Horario",400);
                }
            }
            else
            {
                return response("No inscripto", 400);
            }
         }
         else
         {
             return response("No existe Taller",400);
         }
         ///verifico si el alumno esta inscripto al taller



    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ApiController extends Controller
{
    public function login(request $formdata)
    {
        $lu =  $formdata->get('lu');
        $dni =  $formdata->get('dni');

        $alumno = user::with(['roles','talleres.horarios'])->where(['lu'=>$lu,'dni'=>$dni])->first();

        if($alumno)
        {
            return response()->json($alumno,200);
        }
        else
        {
            return response("Alumno no existe",400);
        }

    }
}

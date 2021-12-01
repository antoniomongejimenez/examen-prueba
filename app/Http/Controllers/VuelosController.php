<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VuelosController extends Controller
{
    public function index()
    {
        // $empleados = DB::select('SELECT *, origen.denominacion, destino.denominacion, compania.denominacion
        //                            FROM vuelos
        //                            JOIN aeropuertos origen
        //                              ON vuelos.origen_id = origen.id
        //                            JOIN aeropuertos destino
        //                              ON vuelos.destino_id = destino.id
        //                            JOIN aeropuertos compania
        //                              ON vuelos.compania_id = compania.id ');

        $empleados = DB::table('emple', 'e')
            ->leftJoin('depart AS d', 'depart_id', '=', 'd.id')
            ->select('e.*', 'denominacion')
            ->get();

        return view('emple.index', [
            'empleados' => $empleados,
        ]);
    }
}

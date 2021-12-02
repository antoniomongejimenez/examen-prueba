<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VuelosController extends Controller
{
    public function index()
    {

        // $empleados = DB::select('SELECT v.*, origen.denominacion, destino.denominacion, compania.denominacion
        //                            FROM vuelos
        //                            JOIN aeropuertos origen
        //                              ON vuelos.origen_id = origen.id
        //                            JOIN aeropuertos destino
        //                              ON vuelos.destino_id = destino.id
        //                            JOIN companias c
        //                              ON vuelos.compania_id = c.id ');

        $vuelos = DB::table('vuelos', 'v')
            ->leftJoin('aeropuertos AS origen', 'origen_id', '=', 'origen.id')
            ->leftJoin('aeropuertos AS destino', 'destino_id', '=', 'destino.id')
            ->leftJoin('companias AS c', 'compania_id', '=', 'c.id')
            ->select('v.*', 'origen.denominacion as origen', 'destino.denominacion as destino', 'c.denominacion as compania')
            ->get();

        return view('vuelos.index', [
            'vuelos' => $vuelos,
        ]);
    }

    public function edit($id)
    {
        $vuelo = $this->findVuelo($id);

        return view('vuelos.edit', [
            'vuelo' => $vuelo,
        ]);
    }

    private function findVuelo($id)
    {
        $vuelos = DB::select('SELECT v.*, origen.denominacion AS origen, destino.denominacion AS destino
                                FROM vuelos AS v
                                JOIN aeropuertos AS origen
                                  ON v.origen_id = origen.id
                                JOIN aeropuertos AS destino
                                  ON v.destino_id = destino.id
                               WHERE v.id = ?', [$id]);

        abort_unless($vuelos, 404);

        return $vuelos[0];
    }

}

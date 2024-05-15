<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignosApiController extends Controller
{
    public function getSignPrediction($language, $sign, $date)
    {
        // Convertir la fecha al formato YYYY-MM-DD
        $formattedDate = date('Y-m-d', strtotime($date));

    
        $prediction = DB::table('signos')
            ->where('tipo', $sign)
            ->whereDate('datetime', $formattedDate)
            ->value($language); 

        if (!$prediction) {
            return response()->json(['error' => 'No se encontró la predicción para el signo y la fecha especificados'], 404);
        }

        return response()->json(['prediction' => $prediction]);
    }
}

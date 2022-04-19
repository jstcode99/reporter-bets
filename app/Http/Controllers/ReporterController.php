<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporterController extends Controller
{
    //
    public function totalToday() {
        $totalToday = DB::table('apuestas')
            ->where([
                ['fecha_apuesta', '>=', '2021-11-11 00:00:00'],
                ['fecha_apuesta', '<=', '2021-11-11 22:00:00']
            ])
            ->whereIn('estado', [2,3,5,7])
            ->sum('valor_ganar_total');
        
        return response()->json($totalToday);
    }

    public function activePlayers() {
        $activePlayers = DB::select('SELECT DISTINCT user FROM apuestas WHERE fecha_apuesta >= ? AND fecha_apuesta <= ?', ['2021-11-11 00:00:00', '2021-11-11 22:00:00']);
        return response()->json(count($activePlayers));
    }

    public function weeklyFigures() {

        $totalWeekly = DB::table('apuestas')
            ->where([
                ['fecha_pagada', '>=', '2021-11-11 00:00:00'],
                ['fecha_pagada', '<=', '2021-11-11 22:00:00']
            ])
            ->whereIn('estado', [2,3,5,7])
            ->sum('valor_ganar_total');

        $betsWeekly = DB::table('apuestas')
            ->where([
                ['fecha_pagada', '>=', '2021-11-11 00:00:00'],
                ['fecha_pagada', '<=', '2021-11-11 22:00:00'],
            ])
            ->whereIn('estado', [2,3,4,5,7])
            ->sum('valor_apostado_total');

        $weeklyFigures = 0;

        if ($totalWeekly && $betsWeekly)  {
            $weeklyFigures = $totalWeekly - $betsWeekly;
        }

        return response()->json($weeklyFigures);
    }

    public function deleteWagers() {
        $deleteWagers = DB::table('apuestas')
            ->where([
                ['fecha_apuesta', '>=', '2021-11-11 00:00:00'],
                ['fecha_apuesta', '<=', '2021-11-11 22:00:00'],
                ['estado', '=', 0]
            ])
            ->count('valor_ganar_total');
        return response()->json($deleteWagers);
    }

    public function manualPlays() {
        $pending = DB::table('apuestas')
            ->where([
                ['fecha_apuesta', '>=', '2021-11-11 00:00:00'],
                ['fecha_apuesta', '<=', '2021-11-11 22:00:00'],
                ['estado', '=', 1]
            ])
            ->count('valor_ganar_total');

        $graded = DB::table('apuestas')
            ->where([
                ['fecha_apuesta', '>=', '2021-11-11 00:00:00'],
                ['fecha_apuesta', '<=', '2021-11-11 22:00:00'],
                ['estado', '<>', 1]
            ])
            ->count('valor_ganar_total');
        
        return response()->json(['pending' => $pending, 'graded' => $graded]);

    }
}

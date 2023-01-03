<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cost;
use App\Models\Selling;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function index(Request $request)
    {

        $past_day = $request->past_day;
        $sales = Selling::select(DB::raw('DATE(created_at) AS created_at, SUM(total) as total_selling'))
            ->where('created_at', '>=', Carbon::now()->subDays($past_day))
            ->groupBy(DB::raw('DATE(created_at)'))
            ->get();

        $fees = Cost::select(DB::raw('DATE(created_at) AS created_at, SUM(total) as total_cost'))
            ->where('created_at', '>=', Carbon::now()->subDays($past_day))
            ->groupBy(DB::raw('DATE(created_at)'))
            ->get();

        $result = [];
        foreach ($sales as $sale) {
            $result[$sale->created_at]['total_selling'] = $sale->total_selling;
        }
        foreach ($fees as $fee) {
            $result[$fee->created_at]['total_cost'] = $fee->total_cost;
        }


        return view('home.index', [
            'home' => 'HOME',
            'selling' => Selling::all(),
            'cost' => Cost::all(),
            'data' => $result,
        ]);
    }
}

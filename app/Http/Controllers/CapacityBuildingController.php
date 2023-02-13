<?php

namespace App\Http\Controllers;

use App\Models\FeaturedTrove;
use App\Models\Trove;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CapacityBuildingController extends Controller
{
    public function index()
    {
        $featuredTroves = FeaturedTrove::with('trove')->get();


        return view('capacity-building', [
            'featuredTroves' => $featuredTroves,
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Area;
use App\Models\City_Town_Village;

class SearchController extends Controller
{
    public function prefecture_city_town_village_search()
    {
        try {
            $defaultArea = Area::where('name', '群馬県')->first();
            $defaultCity_Town_Village = City_Town_Village::where('name', '伊勢崎市')->first();
    
            /*if (!$defaultArea) {
                throw new \Exception('Default area not found.');
            }*/
            $areas = Area::all();
            //ddd($areas);
            $city_town_villages = $defaultArea->city_town_village ?? collect();
            
            
            return view('hospital.search', compact('areas', 'city_town_villages', 'defaultArea', 'defaultCity_Town_Village'));
        } catch (\Exception $e) {
            /*Log::error('Error fetching city town villages: ' . $e->getMessage());
            Log::error($e->getTrace());
            return response()->json(['error' => 'Failed to fetch city town villages'], 500);*/
            }
    } 

    public function getCity_town_villages(Request $request)
    {
        try {
            $areaId = $request->input('area');
            //dd($areaId);
            if ($areaId) {
                $city_town_villages = City_Town_Village::where('id', $areaId)->first()->areas ?? collect();
            } else {
                $city_town_villages = collect();
            }
    
            //return response()->json(['city_town_villages' => $city_town_villages]);
        } catch (\Exception $e) {
            //Log::error('Error fetching city town villages: ' . $e->getMessage());
            //Log::error($e->getTrace());
    
            //return response()->json(['error' => 'Failed to fetch city town villages'], 500);
        }
    }

}

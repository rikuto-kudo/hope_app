<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
//use Illuminate\Support\Facades\DB;
use App\Models\Area;
use App\Models\City_Town_Village;
use App\Models\Hospital;


class SearchController extends Controller
{
    
    public function getAreas()
    {
        $areas = Area::all();
        return view('hospital.search', compact('areas'));
    }

    public function getCityTownVillages(Request $request)
    {
        $areaId = $request->input('area');
        $city_town_villages = City_Town_Village::where('area_id', $areaId)->get();
        return response()->json(['city_town_villages' => $city_town_villages]);
    }

    public function resultHospitals(Request $request)
    {
        $areaId = $request->input('area_id');
        $cityTownVillageId = $request->input('city_town_village_id');

        $hospitals = Hospital::when($areaId, function ($query) use ($areaId) {
            $query->where('area_id', $areaId);
        })->when($cityTownVillageId, function ($query) use ($cityTownVillageId) {
            $query->where('city_town_village_id', $cityTownVillageId);
        })->paginate(5);
        
         $message = $hospitals->isEmpty() ? '該当する病院が存在していないか、追加が遅れている可能性があります。' : null;

        return view('hospital.result', compact('hospitals', 'message'));
    }
    
    //areasテーブルのカラム「name」のデータの変更
    /*public function areasUpdate()
    {
        Area::changeNameColumnAreas();
        
        return 'Areas updated successfully!';
    }*/
    
    //city_town_villagesテーブルのカラム「name」、「area_id」のデータの変更
    /*public function cityTownVillageUpdate()
    {
        City_Town_Village::changeNameColumnCityTownVillages();
        
        return 'City_Town_Villages updated successfully!';
    }*/
    
    //city_town_villagesテーブルのカラム「name」、「area_id」のデータの変更
    /*public function hospitalsUpdate()
    {
        Hospital::ColumnDataHospitals();
        
        return 'hospitals updated successfully!';
    }*/

}

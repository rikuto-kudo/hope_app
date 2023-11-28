<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Area;
use App\Models\City_Town_Village;
use App\Models\Hospital;

class SearchController extends Controller
{
    
    /*==================================
    検索フォームのみ表示(getAreas　getCityTownVillages)
    ==================================*/
    //　/searchにアクセスした際に表示される内容
    public function getAreas()
    {
            $areas = Area::all();

            return view('hospital.search', compact('areas'));
    } 
    
    //エリアに付随する市町村の取得
    public function getCityTownVillages(Request $request)
    {       
            $areaId = $request->input('area');
            $city_town_villages = City_Town_Village::where('area_id', $areaId)->get();
            //$city_town_villages = City_Town_Village::where('area_id', $request->area)->get();
            return response()->json(['city_town_villages' => $city_town_villages]);
    }
    
    /*public function getCity_town_villages($areaId)
    {
        //エリアに付随する市町村の取得
        $city_town_villages = City_Town_Village::where('area_id', $areaId)->pluck('name', 'id');
        
        return response()->json($city_town_villages);
    }*/
    
    public function showHospitals (Request $request)
    {
        $hospital = new Hospital;
        $hospitals = $hospital->getHospitals()->get();
        
        return view('hospital.search', compact('hospitals'));
    }
    
    //　検索ボタンを押した後に実行され、病院情報を返す
    public function resultHospitals(Request $request)
    {
        //初期化
        //$hospitals = [];
        //formタグのpostから送信されたエリアIDと市町村IDを取得
        $areaId = $request->input('area_id');
        $cityTownVillageId = $request->input('city_town_village_id');
        
        $hospitals = Hospital::when($areaId, function ($query) use ($areaId) {
            $query->where('area_id', $areaId);
        })->when($cityTownVillageId, function ($query) use ($cityTownVillageId) {
            $query->where('city_town_village_id', $cityTownVillageId);
        })->get();
        
        
        /*$hospitalsQuery = Hospital::query()->where('area_id', $areaId)->get();
        
        if ($cityTownVillageId) {
            $hospitalsQuery->where('city_town_village_id', $cityTownVillageId);
        }
        
        $hospitals = $hospitalsQuery->get();*/
        
        //HospitalModelのクエリビルダの作成
        //$hospitals = Hospital::query();
        
        //エリアでの絞り込み
        /*if ($areaId) {
            
            $hospitals->where('area_id', $areaId);
        }
        
        //市町村での絞り込み
        if ($cityTownVillageId) {
            
            $hospitals->where('city_town_village_id', $cityTownVillageId);
        }*/
        
        // ペジネーションを指定し、結果を取得
        //$hospitals = $hospitals->paginate(1);
        
        return view('hospital.result', compact('hospitals'));
    }

}

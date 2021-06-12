<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

use App\Tools\ResponseCodes;
use App\Http\Resources\SectorResource;
use App\Exceptions\SomethingWentWrong;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $sectors = Sector::orderBy('name','asc')->get();
            return SectorResource::collection($sectors);
        } catch (\Throwable $th) {
            throw new SomethingWentWrong;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate([
            'sector_code' => 'required',
        ]);

        try {
            $sector = Sector::where('code',$request->sector_code)->get()->first();
            if($sector){
                return new SectorResource($sector);
            } else {
                return response()->json(['status' => '404', 'message' => 'Not found'], ResponseCodes::NOT_FOUND);
            }
        } catch (\Throwable $th) {
            throw new SomethingWentWrong;
        }
    }

    /**
     * search in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->validate([
            'busqueda' => 'required',
        ]);

        try {
            $sectors = Sector::where('name','like','%'.$request->busqueda.'%')->get();
            if($sectors->count() <= 0 ){
                return response()->json(['status' => '404', 'message' => 'Nothing found'], ResponseCodes::NOT_FOUND);
            } else {
                return SectorResource::collection($sectors);
            }
        } catch (\Throwable $th) {
            throw new SomethingWentWrong;
        }
    }

    /**
    * search in storage by municipality
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function byMunicipality(Request $request)
    {
        $request->validate([
            'municipality_code' => 'required',
        ]);

        try {
            $sectors = Sector::where('municipality_code', $request->municipality_code)->get();
            if($sectors->count() <= 0 ){
                return response()->json(['status' => '404', 'message' => 'Nothing found'], ResponseCodes::NOT_FOUND);
            } else {
                return SectorResource::collection($sectors);
            }
        } catch (\Throwable $th) {
            throw new SomethingWentWrong;
        }
    }


}
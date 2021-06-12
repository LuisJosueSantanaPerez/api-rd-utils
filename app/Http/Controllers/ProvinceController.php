<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

use App\Tools\ResponseCodes;
use App\Http\Resources\ProvinceResource;
use App\Exceptions\SomethingWentWrong;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $provinces = Province::orderBy('name','asc')->get();
            return ProvinceResource::collection($provinces);
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
            'province_code' => 'required',
        ]);

        try {
            $province = Province::where('code',$request->province_code)->get()->first();
            if($province){
                return new ProvinceResource($province);
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
            $provinces = Province::where('name','like','%'.$request->busqueda.'%')->get();
            if($provinces->count() <= 0 ){
                return response()->json(['status' => '404', 'message' => 'Nothing found'], ResponseCodes::NOT_FOUND);
            } else {
                return ProvinceResource::collection($provinces);
            }
        } catch (\Throwable $th) {
            throw new SomethingWentWrong;
        }
    }

    /**
     * search in storage by country.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function byCountry(Request $request)
    {
        $request->validate([
            'country_id' => 'required',
        ]);

        try {
            $provinces = Province::where('country_id', $request->country_id)->get();
            if($provinces->count() <= 0 ){
                return response()->json(['status' => '404', 'message' => 'Nothing found'], ResponseCodes::NOT_FOUND);
            } else {
                return ProvinceResource::collection($provinces);
            }
        } catch (\Throwable $th) {
            throw new SomethingWentWrong;
        }
    }


}
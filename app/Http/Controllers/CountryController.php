<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

use App\Tools\ResponseCodes;
use App\Http\Resources\CountryResource;
use App\Exceptions\SomethingWentWrong;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $countries = Country::orderBy('name','asc')->get();
            return CountryResource::collection($countries);
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
            'country_id' => 'required',
        ]);

        $country = Country::findOrFail($request->country_id);

        try {
            return new CountryResource($country);
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
            $countries = Country::where('name','like','%'.$request->busqueda.'%')->get();
            if($countries->count() <= 0 ){
                return response()->json(['status' => '404', 'message' => 'Nothing found'], ResponseCodes::NOT_FOUND);
            } else {
                return CountryResource::collection($countries);
            }
        } catch (\Throwable $th) {
            throw new SomethingWentWrong;
        }

    }




}
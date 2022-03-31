<?php

namespace App\Http\Controllers;
use App\Models\kyc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Sessions;
use DB;
use Illuminate\Support\Facades\Auth;
class locations extends Controller
{
    // Retrieve all the restraunts in Lusaka which are closest to the user's current location 
    public function lusaka(Request $request){
       
        $lat = -15; //Current users latitude 
        $lon = 28.3; //Current users Longitude 
            
        $data = DB::table("kycs")
            ->select("*"
                ,DB::raw("6371 * acos(cos(radians(" . $lat . ")) 
                * cos(radians(kycs.lat)) 
                * cos(radians(kycs.lng) - radians(" . $lon . ")) 
                + sin(radians(" .$lat. ")) 
                * sin(radians(kycs.lat))) AS distance"))
                ->groupBy("distance")
                ->get();
                $data_restraunts = json_encode((str_replace( array('[',']') , ''  , $data  )));
 
      return view('lusaka',compact('data'));

    }
}

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
    // Retrieve all the restraunts from Lusaka which are closest to the user's current location 
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



     // Retrieve all the restraunts from copperbelt which are closest to the user's current location 
     public function copperbelt(Request $request){
       
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
                ->get();//where('business_province',"=",'Hawaii')
                $data_restraunts = json_encode((str_replace( array('[',']') , ''  , $data  )));
 
      return view('copperbelt',compact('data'));

    }


    // Retrieve all the restraunts from eastern which are closest to the user's current location 
    public function eastern(Request $request){
       
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
 
      return view('eastern',compact('data'));

    }




    // Retrieve all the restraunts from southern which are closest to the user's current location 
    public function southern(Request $request){
       
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
 
      return view('southern',compact('data'));

    }



    // Retrieve all the restraunts from western which are closest to the user's current location 
    public function western(Request $request){
       
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
 
      return view('western',compact('data'));

    }




    // Retrieve all the restraunts from Luapula which are closest to the user's current location 
    public function luapula(Request $request){
       
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
 
      return view('luapula',compact('data'));

    }


    // Retrieve all the restraunts from northen which are closest to the user's current location 
    public function northen(Request $request){
       
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
 
      return view('northen',compact('data'));

    }


    // Retrieve all the restraunts from north-western which are closest to the user's current location 
    public function north_western(Request $request){
       
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
 
      return view('north_western',compact('data'));

    }



    // Retrieve all the restraunts from central which are closest to the user's current location 
    public function central(Request $request){
       
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
 
      return view('central',compact('data'));

    }



    // Retrieve all the restraunts from muchinga which are closest to the user's current location 
    public function muchinga(Request $request){
       
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
 
      return view('muchinga',compact('data'));

    }
}

<?php
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\locations;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Retrive all addresses in Lusaka 
Route::get('/lusaka',[locations::class, 'lusaka']);





Route::fallback(function () {
  
    return "Wrong address, are you drunk ?";
});



 Route::get('address/',function(){
     //Laravel Http-Client fetching address Location
    $fetch = Http::withHeaders([
        'Content-Type' => 'application/json',
               
    ])->get('https://api.geoapify.com/v1/geocode/autocomplete?text=Lusaka west&limit=5&apiKey=aa09da14472b44869ca9cc43c81f3ef1');
 
    if(is_null($fetch)){
       return "searching...";
    }
    $data = $fetch->object();
    return $data;
    return view('address',compact('output'));


    


}); 

 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');






require __DIR__.'/auth.php';

<?php
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

Route::fallback(function () {
  
    return "Wrong address, are you drunk ?";
});



 Route::get('address/',function(){
     //Laravel Http-Client fetching address Location
    $fetch = Http::withHeaders([
        'Content-Type' => 'application/json',
               
    ])->get('https://api.freegeoip.app/json/165.58.129.201?apikey=c8a369a0-3426-11ec-998c-473b46832dcc');
 
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

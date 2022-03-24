<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\kyc as kyc_forms;
use Sessions; 
use Illuminate\Support\Facades\Auth;

class Kyc extends Component
{
    use WithFileUploads;

    public $business_name;
    public $business_email;
    public $business_phone_number;
    public $business_province;
    public $business_city;
    public $business_location;
    public $lat;
    public $lng;
    public $photo;
    public $client_id;
    public $kycform = false;
    public $maps = false;

    public function mount($client_id=null)
    {
        $this->client_id = auth()->user()->id;
    }

    /*
    |--------------------------------------------------------------------------
    | Rendering KYC Form
    |--------------------------------------------------------------------------
    |
    | This function will trigger KYC Form
    | on the dashboard where a user
    | will begin the sign up
    |
    */
    public function edit_kyc()
    {
        $this->kycform=true;
    }



    
    /*
    |--------------------------------------------------------------------------
    | Cancelling KYC Form
    |--------------------------------------------------------------------------
    |
    | This function will cancel the KYC Form
    | on the dashboard when the user has
    | signed up successfully
    |
    |
    */
    public function cancel_kyc()
    {
        $this->resetExcept('client_id');
        $this->resetValidation();
        $this->emit('cancel_kyc');
    }





    /*
    |--------------------------------------------------------------------------
    | Livewire Validation Rules
    |--------------------------------------------------------------------------
    |
    | Here are KYC livewire
    | validation rules
    |
    |
    */
    protected $rules = [
    'business_name' => 'required|string|max:255|unique:kycs',
    'business_email' => 'required|email|unique:kycs',
    'business_province' => 'required|string|max:255',
    'business_city' => 'required|string|max:255',
    'business_location' => 'required|string|max:255',
    'business_phone_number' => 'required|string|max:255|unique:kycs',
    'photo' => 'required|image|max:1024',
    'client_id' => 'required|numeric|max:255|unique:kycs',
];




    /*
    |--------------------------------------------------------------------------
    | Save Data
    |--------------------------------------------------------------------------
    |
    | The KYC Form validation will occur here
    | If successfull data will be saved
    | else errors will be thrown
    |
    |
    */

    public function save()
    {
        $this->emit('edit_kyc');
        $data = $this->validate();
        $data['photo'] = $this->photo->store('restraunts');
       
        kyc_forms::create($data);
       
        session()->flash('success', 'saved successfully. Cancel and Proceed');
        $this->emit('refreshDetails');
    }


    

    
    /*
    |--------------------------------------------------------------------------
    | Get Current Location
    |--------------------------------------------------------------------------
    |
    | Getting Current Location of the user
    | using the freegeoapi with apikey 
    | and the ipv4 gotten from PHP
    |
    |
    */

public function current_location()
{
    $fetch = Http::withHeaders([
        'Content-Type' => 'application/json',
               
    ])->get('https://api.freegeoip.app/json/165.58.129.201?apikey=c8a369a0-3426-11ec-998c-473b46832dcc');
 
    if(is_null($fetch)){
       return "searching...";
    }
    $data = $fetch->object();
    $this->business_location = $data->country_name;
    $this->business_city = $data->city;
    $this->business_province = $data->region_name;
    $this->lat = $data->latitude;
    $this->lng = $data->longitude;
    $this->maps=true;
   
   
}
}
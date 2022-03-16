<?php

namespace App\Http\Livewire;
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
    public $photo;
    public $client_id;
    public $kycform = false;

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


   
}
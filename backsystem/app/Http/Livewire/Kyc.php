<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\kyc as kyc_forms;
use Session;
use Illuminate\Support\Facades\Auth;
class Kyc extends Component
{
    public $business_name;
    public $business_email;
    public $business_phone_number;
    public $business_province;
    public $business_city;
    public $business_location;
    public $client_id;
    public $kycform = false;

public function mount($client_id=null){
    $this->client_id = auth()->user()->id;
}

    //Triger KYC Form
    public function edit_kyc()
    {
        $this->kycform=true;
    }


    //Cancel KYC Form
    public function cancel_kyc()
    {
        $this->reset();
        $this->resetValidation();
        $this->emit('cancel_kyc');
    }





    //Validation
    protected $rules = [
    'business_name' => 'required|string|max:255',
    'business_email' => 'required|email|unique:kycs',
    'business_province' => 'required|string|max:255',
    'business_city' => 'required|string|max:255',
    'business_location' => 'required|string|max:255',
    'business_phone_number' => 'required|string|max:255|unique:kycs',
    'client_id' => 'required|string|max:255|unique:kycs',
];




    // Store Form Data in the Database

   public function save(){
       
        $this->emit('edit_kyc');
        $data = $this->validate();
      
        kyc_forms::create($data);

        //Flash Message if Successfull
        session()->flash('success', 'saved successfully');
    }
}

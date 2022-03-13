<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\kyc as kyc_forms;

use Session;
class Kyc extends Component
{
    public $business_name, $business_email, $business_phone_number, $business_province, $business_city, $business_location;


//Validation
protected $rules = [
    'business_name' => 'required|string|max:255',
    'business_email' => 'required|email',
    'business_province' => 'required|string|max:255',
    'business_city' => 'required|string|max:255',
    'business_location' => 'required|string|max:255',
    'business_phone_number' => 'required|string|max:255',
];

// Store Form Data in the Database

    public function submit(){
        
      $this->validate();
      
        kyc_forms::create([
            'business_name' => $this->business_name,
            'business_email' => $this->business_email,
            'business_province' => $this->business_province,
            'business_city' => $this->business_city,
            'business_location' => $this->business_location,
            'business_phone_number' => $this->business_phone_number,
          
          ]);
    
          Session::flash('form_submit','Form Submitted Successfully');
          $this->resetInputFields(); 
     
    }



    //Reseting Input Fields
     
public function resetInputFields(){
     $this->business_email = "";
     $this->business_email = "";
     $this->business_province = "";
     $this->business_city = "";
     $this->business_location = "";
     $this->business_phone_number = "";
   
}



    public function test(){
       
       dd($this->message);  
      

    }
}

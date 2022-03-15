<?php

namespace App\Http\Livewire;
use App\Models\kyc as kyc_forms;
use Livewire\Component;

class BusinessProfile extends Component
{
   
    /*
    |--------------------------------------------------------------------------
    | Rendering Business Profile
    |--------------------------------------------------------------------------
    |
    | This function will render the user's
    | Business profile on the dashboard 
    |
    */

    public function render()
    {
        return view('livewire.business-profile', [
            'business_profile' => kyc_forms::where('client_id', "=", auth()->user()->id)->first()
        ]);
    }


    
}
<div wire:poll="$refresh">
@if(is_null($business_profile))         
<div>
   
   <div>
  <h6 class="mb-0 font-weight-bold">Hi {{Auth::user()->firstname}}</h6>
                        </div>
                        <div class="ml-2">
                          <h6 class="location font-weight-bold">Get Started</h6>
                        
  </div>
  
  </div>   
@else
<div>
   
   <div wire:poll="$refresh">
  <h6 class="mb-0 font-weight-normal">{{$business_profile->business_name}}</h6>
                        </div>
                        <div class="ml-2">
                          <h6 class="location font-weight-normal">{{$business_profile->business_province}}</h6>
                        
  </div>
  
  </div>      
@endif


</div>
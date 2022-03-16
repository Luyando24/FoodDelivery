<div>


@if(is_null($business_profile))         
<div>

<div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="{{asset('images/dashboard/people.svg')}}" alt="people">
                  <div class="weather-info">
                  <main>


   <div>
  <h6 class="mb-0 font-weight-bold">Hi {{Auth::user()->firstname}}</h6>
                        </div>
                        <div class="ml-2">
                          <h6 class="location font-weight-bold">Get Started</h6>
                        
  </div>


  
  </main>
                  </div>
                </div>
              </div> 
  
  
  </div>
  
  

@else
<div>

<div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="{{asset('restraunts_clients_uploads/'.$business_profile->photo)}}" alt="{{$business_profile->business_name}}">
                  <div class="weather-info">
                  <main>


   <div>
  <h6 class="mb-0 font-weight-bold">{{$business_profile->business_name}}</h6>
                        </div>
                        <div class="ml-2">
                          <h6 class="location font-weight-bold">{{$business_profile->business_province}}</h6>
                        
  </div>


  
  </main>
                  </div>
                </div>
              </div> 
  
  
  </div>        
@endif


</div>
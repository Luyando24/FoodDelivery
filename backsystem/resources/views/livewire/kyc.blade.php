<div>

<div>
  <!-- Button trigger kyc Form visible -->
<button class="btn btn-primary" wire:click="edit_kyc">
  GET STARTED
</button>

</div>
@if($kycform)

<br><br>
<!--Invisible form here-->
<div class="shadow p-3 mb-5 bg-white rounded w-90" id="kycform" >
<h3 style="font-weight:bold">KYC FORM</h3>
  <hr>

<!--Success Message Here-->
@if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

<!--End success Message Here-->




<!--Business Name-->
<label for="business_name">Business Name</label>
<input type="text" class="form-control" id="business_name" aria-describedby="business_name"  wire:model="business_name" >
<div>  @error('business_name') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>

  <!--Business Email-->    
<label for="business_email">Business Email</label>
<input type="text" class="form-control" id="business_email" aria-describedby="business_email"  wire:model="business_email" >
<div>  @error('business_email') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>
 <!--Business Phone Number-->    
 <label for="business_email">Business Phone Number</label>
<input type="text" class="form-control" id="business_phone_Number" aria-describedby="business_phone_number"  wire:model="business_phone_number">
<div>  @error('business_phone_number') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>

<br>

 <!--Business Province-->    
 <h4>Business Location </h4>
 
<p style="font-style:italic">You can click the 'use current location' button below to use your current location as your business physical address</p>

<button class="btn btn-primary" wire:click="current_location" style="margin:10px"> <i class="fa fa-map-marker"></i> use current location</button>

<button class="btn btn-info" style="margin:10px">I will Fill in form instead</button>
 <br><br>
 <!-- If user decides to fill in the form via the use my current location -->
 @if($maps)
 <label for="business_country" >Business Province</label>
<input type="text" class="form-control" id="business_country"  aria-describedby="business_province"  wire:model="business_province" >
<div>  @error('business_province') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>


 <!--Business City -->    
 <label for="business_email" >Business City</label>
<input type="text" class="form-control" id="business_city"  aria-describedby="business_city"  wire:model="business_city" >
<div>  @error('business_city') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>


 <!--Business Location-->    
 <label for="business_location">Business Country</label>
<input type="text" class="form-control" id="business_location" aria-describedby="business_location" wire:model="business_location">
<div>  @error('business_location') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>

<br>

<!--Business Location --> 


<div>
<iframe  src="https://maps.google.com/maps?q={{$lat}},{{$lng}}&z=15&output=embed" width="100%" height="250" frameborder="0" style="border:0"></iframe>  
 </div>
@endif


<!--Business Opening time-->    
<label for="business_location">Business Opening time</label>
<input type="time" class="form-control" id="business_location" aria-describedby="opening_time" wire:model="opening_time">
<div>  @error('opening_time') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>



 <!--Business Closing time-->    
 <label for="business_email" >Business Closing time</label>
<input type="time" class="form-control" id="business_city"  aria-describedby="closing_time"  wire:model="closing_time" >
<div>  @error('closing_time') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>










<!--Show photo preview to the user after he/she finishes the upload--> 
<div>
  @if ($photo)
  
        Photo Preview:
        <img src="{{ $photo->temporaryUrl() }}">
    @endif
   
</div>
<!--Here ends the photo preview-->

 <!--Business Picture Upload-->    
 <label for="business_location">Business Photo</label>
<input type="file" class="form-control" id="photo" aria-describedby="photo"  wire:model="photo" >
<div>  @error('photo') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>

<!--Loading indicators-->
<div wire:loading wire:target="photo">Uploading...</div>

<!--Client Id (Hidden)-->     
<input type="hidden" class="form-control" wire:model="client_id" >
<div>  @error('client_id') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>



<!--Data Ends Here-->
<hr>
<button class="btn btn-danger" wire:click="cancel_kyc">CANCEL</button>
<button class="btn btn-success" wire:click="save">SAVE</button>
<hr>

<!--Success Message Here-->
@if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

<!--End success Message Here-->



</div>



@endif



</div>
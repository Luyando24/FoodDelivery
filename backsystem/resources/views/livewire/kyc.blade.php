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
 <label for="business_province">Business Province</label>
<input type="text" class="form-control" id="business_email" aria-describedby="business_province"  wire:model="business_province" >
<div>  @error('business_province') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>


 <!--Business City -->    
 <label for="business_email">Business City</label>
<input type="text" class="form-control" id="business_city" aria-describedby="business_city"  wire:model="business_city" >
<div>  @error('business_city') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
<br>


 <!--Business Location-->    
 <label for="business_location">Business Location</label>
<input type="text" class="form-control" id="business_location" aria-describedby="business_location"  wire:model="business_location" >
<div>  @error('business_location') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
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
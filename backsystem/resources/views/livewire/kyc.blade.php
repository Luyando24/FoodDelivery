

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight:bold">KYC FORMS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
   

   <!--End showing Success and Erros and here--> 

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
     <!--Data Ends Here-->




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button wire:key type="button" class="btn btn-primary" wire:click.prevent="save()">Save changes</button>
      </div>
    </div>
  </div>
</div>
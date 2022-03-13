<!-- Button trigger modal -->

<div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
   Get Started
  </button>
   
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
 
    <!--End showing status-->

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-weight:bold">KYC FORM</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!--Bootstrap Form Groups Begins-->
 <!--Show status here if form submitted successfully--> 
 @if(Session::has('form_submit'))
    <div class="alert alert-primary alert-dismissible fade show " role="alert">
        
        <div class="font-medium text-600">
            <i class="fa-regular fa-bell"></i>
        <strong>Hello there!</strong> You have some feedbacks 
        </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
          {{Session::get('form_submit')}}
        </ul>
          </div>
    </div>

@endif
          
            <div class="form-group">
              <label for="business_name">Business Name</label>
              <input type="text" class="form-control" id="business_name" aria-describedby="business_name" wire:model.defer="business_name" placeholder="Enter Name">
            <div>  @error('business_name') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
            </div>
            <div>{{$business_name}}</div>
            <div class="form-group">
              <label for="business_email">Business Email</label>
              <input type="text" class="form-control" id="business_email" wire:model.defer="business_email" placeholder="Enter Email">
           <div>   @error('business_email') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
            </div>
            <div class="form-group">
                <label for="business_phone_number">Business Phone Number</label>
                <input type="number" class="form-control" id="business_phone_number" wire:model.defer="business_phone_number" placeholder="Enter Number">
              <div>  @error('business_phone_number') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
              </div>

              <div class="form-group">
                <label for="business_province">Business Province</label>
                <input type="text" class="form-control" id="business_province" wire:model.defer="business_province" placeholder="Enter Province">
            <div>    @error('business_province') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
              </div>
              <div class="form-group">
                <label for="business_city">Business City</label>
                <input type="text" class="form-control" id="business_city" wire:model.defer="business_city" placeholder="Enter City">
            <div>    @error('business_city') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
              </div>
              <div class="form-group">
                <label for="business_location">Business Location</label>
                <input type="text" class="form-control" id="business_location" wire:model.defer="business_location" placeholder="Enter Location">
              <div>  @error('business_location') <span class="error" style="color:red">{{ $message }}</span> @enderror </div>
              </div>
            
           
         

          <!--Bootrap Form Groups Ends-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.defer="submit()">Save changes</button>
        </div>
      </div>
    </div>
    
  </div>

@extends('layouts.website')
@section('content')


<div class="inner-section">
  <form class="contactform" action="{{route('user_information_submit')}}" method="post">
    @csrf
    <div class="row">


      <div class="col-md-6">
        <div class="form-group">
          <label for="">S.NO</label>
          <p class="validate form-control"> {{ $item->id }}</p>

          <input name="id" type="hidden" placeholder="Name" class="validate form-control" required=""
            value="{{ $item->id }}">

        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Registration Number</label>
          <p class="validate form-control"> {{ $item->registration_number }}</p>
          <input name="registration_number" type="hidden" placeholder="Name" class="validate form-control" required=""
            value="{{ $item->registration_number }}">

        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Ammount</label>
          <p class="validate form-control"> {{ $item->ammount }}</p>
          <input type="hidden" placeholder="Ammount" name="ammount" value="{{ $item->ammount }}"
            class="validate form-control" required="">
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="">Full Name</label>
          <input id="name" name="full_name" type="text" placeholder="Full Name" value="{{old('full_name')}}"
            class="validate form-control" required="">
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Phone No</label>
          <input id="phone" type="number" placeholder="Phone No" name="phone" value="{{old('phone')}}"
            class="validate form-control" required="">
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">OTP</label>
          <input id="mobile" type="number" placeholder="OTP" name="otp" class="validate form-control" required="">
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Email</label>
          <input id="email" type="email" placeholder="Email" name="email" value="{{old('email')}}"
            class="validate form-control" required="">
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="">Division</label>
          <select name="division" class="form-control">
            <option disabled selected>Select Division</option>
            <option value="Barishal">Barishal</option>
            <option value="Chattogram">Chattogram</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Mymensingh">Mymensingh</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Sylhet">Sylhet</option>
          </select>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea id="message" placeholder="Your Address" name="address" class="form-control" required=""></textarea>
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>

      <div class="col-md-12">
        <div class="send">
          <button class="btn btn-theme" type="submit" name="send">Send</button>
        </div>
        <span class="output_message"></span>
      </div>
    </div>
  </form>

</div>

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js">
</script>
<script>
  $( document ).ready(function() {
    // alert('.ok');
    $("#phone").on('focusout', function(){
    // alert('ok');
    // console.log('ok');
    axios.get("/Sms_gateway/send-single-sms.php?number=+8801689880506 & message=hhsiww9")
    .then(function (response) {
        // handle success
        if (response.data.api_response_message == "SUCCESS") {
        } else {
            swal({
                title: "Error",
                text: "Enter a valid phone number with country code.",
                type: "error",
                timer: 3000,
            });
        }
    })
    .catch(function (error) {
        console.log(error);
    });
    });
    
});


</script>
@endpush
@endsection
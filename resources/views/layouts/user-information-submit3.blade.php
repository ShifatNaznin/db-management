@extends('layouts.website')
@section('content')


<div class="inner-section">
  <form class="contactform" method="post">
    <div class="row">


      <div class="col-md-6">
        <div class="form-group">
          <label for="">S.NO</label>
          <p class="validate form-control"> {{ $item->id }}</p>

          <input id="name" name="name" type="hidden" placeholder="Name" class="validate form-control" required="">

        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Registration Number</label>
          <p class="validate form-control"> {{ $item->registration_number }}</p>
          <input id="name" name="name" type="hidden" placeholder="Name" class="validate form-control" required="">

        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="">Full Name</label>
          {{-- <p class="validate form-control"> {{ $item->full_name }}</p> --}}
          <input id="name" name="fullname" type="text" placeholder="FullName" class="validate form-control"
            required="">
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Phone No</label>
          {{-- <p class="validate form-control"> {{ $item->email }}</p> --}}
          <input id="mobile" type="text"placeholder="Phone No" name="phone" class="validate form-control"
            required="">
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Email</label>
          <p class="validate form-control"> {{ $item->phone }}</p>
          <input id="email" type="text" placeholder="Email" name="email" class="validate form-control" required="">
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
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Ammount</label>
          <p class="validate form-control"> {{ $item->ammount }}</p>
          {{-- <input type="text" placeholder="Ammount" name="ammount" class="validate form-control" required=""> --}}
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

@endsection
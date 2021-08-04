@extends('layouts.website')
@section('content')

<div class="inner-section">

  <form class="contactform" action="{{route('find_user_information')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-2"></div>

      <div class="col-md-7">
        <div class="form-group">
          <input name="registration_number" type="text" placeholder="Enter Your Registration Number"
            class="validate form-control" required="">
          <span class="input-focus-effect theme-bg"></span>
        </div>
      </div>
      <div class="col-md-3">
        <div class="send">
          <button class="btn btn-theme" type="submit">
            Search</button>
        </div>
      </div>

    </div>
  </form>
  @if(Session::has('error'))
  <div class="alert alert-danger" role="alert">
    <a href="#" class="alert-link">No Registration Number Found!!</a>
  </div>
  @endif
</div>

@endsection
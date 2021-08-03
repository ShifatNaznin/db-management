@extends('layouts.website')
@section('content')
<div class="inner-section">

  <table class="table table-hover">
    @if ($item->status == "Paid")
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Registration.No.</th>
        <th>Full Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Division</th>
        <th>Status</th>
        <th>Ammount</th>
        {{-- <th>Action</th> --}}
      </tr>
    </thead>
    <tbody>


      <tr>

        <td>{{ $item->id }}</td>
        <td>{{ $item->registration_number }}</td>
        <td>{{ $item->full_name }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->division }}</td>
        <td>{{ $item->status }}</td>
        <td>{{ $item->ammount }}</td>

        {{-- <td>
          <div class="send">
            <a href="{{route('user_payment_information',$item->registration_number)}}" class="btn btn-theme" type="submit"> Payment</a>
          </div>
        </td> --}}
      </tr>

      @else


      <thead>
        <tr>
          <th>S.No.</th>
          <th>Registration.No.</th>
          {{-- <th>Full Name</th>
          <th>Mobile</th>
          <th>Email</th>
          <th>Division</th> --}}
          <th>Status</th>
          <th>Ammount</th>
          <th>Action</th>
        </tr>
      </thead>
    <tbody>


      <tr>

        <td>{{ $item->id }}</td>
        <td>{{ $item->registration_number }}</td>
        {{-- <td>{{ $item->full_name }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->division }}</td> --}}
        <td>{{ $item->status }}</td>
        <td>{{ $item->ammount }}</td>

        <td>
          <div class="send">
   
            <a href="{{route('user_payment_information',$item->registration_number)}}" class="btn btn-theme" type="submit"> Payment</a>
          </div>
        </td>
      </tr>
      @endif


    </tbody>
  </table>



</div>

@endsection
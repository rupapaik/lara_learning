@extends('layout')
@section('title','Edit Details For'.$customer->name)
@section('content')
Customer List

<div class ="row">
  <div class="col-12">
    <h1>Edit Details For {{$customer->name}}</h1>
  </div>
</div>
<div class ="row">
  <div class="col-12">
    <form action="{{url('/customers/'.$customer->id)}}" method="Post">
      @method('PATCH')
      @include('customers.form')
        <button type ="submit" class= "btn btn-info">Update Customer</button>
    </form>
  </div>
</div>
<hr>

@endsection

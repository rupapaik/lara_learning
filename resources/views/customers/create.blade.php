@extends('layout')
@section('content')
@section('title')
Customer List
@endsection
<div class ="row">
  <div class="col-12">
    <h1> Add New Customer </h1>
  </div>
</div>
<div class ="row">
  <div class="col-12">
    <form action="{{url('/customers')}}" method="POST">
      @include('customers.form')
        <button type ="submit" class= "btn btn-info">Add Customer</button>
    </form>
  </div>
</div>
@endsection

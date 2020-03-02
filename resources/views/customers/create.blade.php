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
    <form action="/customers" method="POST">
        @csrf
         <div class="form-group">
             <label for="name">Name </label>
             <input type="text" name="name" value = "{{old('name')}}">
         </div>

         <div>{{$errors->first('name')}}</div>
         </br>

         <div class="form-group">
            <label for="name">Email </label>
            <input type="text" name="email" value = "{{old('email')}}">
            <div>{{$errors->first('email')}}</div>
        </div>

       <div class="form-group">
          <label for="status">Status</label>
          <select name="active" id="active" class= "form-control">
            <option value=""disabled>Select Customer Status</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
          </select><br>

          <div class="form-group">
             <label for="status">Company</label>
             <select name="company_id" id="company_id" class= "form-control">
               @foreach ($companies as $company)
              <option value="{{ $company->id }}">{{$company->name}}</option>
                @endforeach
             </select><br>
        <button type ="submit" class= "btn btn-info">Add Customer</button>
    </form>
  </div>
</div>
<hr>

@endsection

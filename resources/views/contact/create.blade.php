@extends('layout')
@section('title','Contact Us')
@section('content')
<div class ="row">
  <div class="col-12">
    <h1>Contact Us </h1>
  </div>
</div>
<div class ="row">
  <div class="col-12">
    <form action="{{url('/contact')}}" method="POST">
      @csrf
      <div class="form-group">
         <label for="name">Name </label>
         <input type="text" name="name" value = "{{old('name')}}">
         <div>{{$errors->first('name')}}</div>
      </div>
       </br>
       <div class="form-group">
          <label for="email">Email </label>
          <input type="text" name="email" value = "{{old('email')}}">
          <div>{{$errors->first('email')}}</div>
       </div>

       <div class="form-group">
          <label for="message">Message </label>
          <textarea type="text" name="message" id = "message" cols="30" rows="10" class="form-control">{{old('message')}}</textarea>
          <div>{{$errors->first('message')}}</div>
       </div>
       <button type="submit" class = "btn btn-primary">Send Message</button>
    </form>
  </div>
</div>
@endsection

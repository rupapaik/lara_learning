@csrf
 <div class="form-group">
     <label for="name">Name </label>
     <input type="text" name="name" value = "{{old('name')?? $customer->name}}">
 </div>

 <div>{{$errors->first('name')}}</div>
 </br>

 <div class="form-group">
    <label for="email">Email </label>
    <input type="text" name="email" value = "{{old('email')?? $customer->email}}">
    <div>{{$errors->first('email')}}</div>
 </div>

<div class="form-group">
  <label for="status">Status</label>
  <select name="active" id="active" class= "form-control">
    <option value=""disabled>Select Customer Status</option>
    @foreach($customer ->activeOptions() as $activeOptionKey => $activeOptionValue)
       <option value="{{$activeOptionKey}}"{{ $customer->active == $activeOptionValue ? 'selected' : ''}}>{{$activeOptionValue}}</option>
    @endforeach
  </select>
</div>
  <div class="form-group">
     <label for="status">Company</label>
     <select name="company_id" id="company_id" class= "form-control">
       @foreach ($companies as $company)
      <option value="{{ $company->id }}" {{$company->id == $customer->company_id? 'selected':''}}>{{$company->name}}</option>
        @endforeach
     </select><br>
</div>

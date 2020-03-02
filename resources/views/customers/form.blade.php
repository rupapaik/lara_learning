@csrf
 <div class="form-group">
     <label for="name">Name </label>
     <input type="text" name="name" value = "{{old('name')?? $customer->name}}">
 </div>

 <div>{{$errors->first('name')}}</div>
 </br>

 <div class="form-group">
    <label for="name">Email </label>
    <input type="text" name="email" value = "{{old('email')?? $customer->email}}">
    <div>{{$errors->first('email')}}</div>
 </div>

<div class="form-group">
  <label for="status">Status</label>
  <select name="active" id="active" class= "form-control">
    <option value=""disabled>Select Customer Status</option>
    <option value="1"{{ $customer->active == 'Active' ? 'selected' : ''}}>Active</option>
    <option value="0"{{ $customer->active == 'Inactive' ? 'selected' : ''}}>Inactive</option>
  </select><br>
</div>
  <div class="form-group">
     <label for="status">Company</label>
     <select name="company_id" id="company_id" class= "form-control">
       @foreach ($companies as $company)
      <option value="{{ $company->id }}" {{$company->id == $customer->company_id? 'selected':''}}>{{$company->name}}</option>
        @endforeach
     </select><br>
</div>

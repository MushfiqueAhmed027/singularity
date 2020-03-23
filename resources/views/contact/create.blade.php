@extends('layout')

@section('main')
@if($errors->any())
    <div class="alert alert-danger">
       <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
   </div>
@endif
    <div align="right">
       <a href="{{ route('contact.index') }}" class="btn btn-default">Back</a>
    </div>

    <form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data">

    @csrf
        <div class="form-group">
             <label class="col-md-4 text-right">Enter First Name</label>
          <div class="col-md-8">
            <input type="text" name="First_Name" class="form-control input-lg" />
          </div>
       </div>
        <br />
       
      <div class="form-group">
          <label class="col-md-4 text-right">Enter Last Name</label>
         <div class="col-md-8">
           <input type="text" name="Last_Name" class="form-control input-lg" />
         </div>
     </div>
      <br />
     
      <div class="form-group">
        <label class="col-md-4 text-right">Enter Email</label>
       <div class="col-md-8">
         <input type="text" name="Email" class="form-control input-lg" />
       </div>
   </div>
   <br />

   <div class="form-group">
    <label class="col-md-4 text-right">Date of Birth</label>
   <div class="col-md-8">
     <input type="text" name="date_of_birth" class="form-control input-lg" />
   </div>
</div>
<br />

<div class="form-group">
    <label class="col-md-4 text-right">Enter Address</label>
   <div class="col-md-8">
     <input type="text" name="Address" class="form-control input-lg" />
   </div>
</div>
<br />

<div class="form-group">
    <label class="col-md-4 text-right">Enter Phone Number</label>
   <div class="col-md-8">
     <input type="text" name="Phone_Number" class="form-control input-lg" />
   </div>
</div>
<br />
      <br /><br /><br />
    <div class="form-group text-center">
        <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
    </div>

</form>

@endsection

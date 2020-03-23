@extends('layout')

@section('main')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
                <a href="{{ route('data.index') }}" class="btn btn-default">Back</a>
            </div>
            <br />
     <form method="post" action="{{ route('data.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group">
       <label class="col-md-4 text-right">Enter First Name</label>
       <div class="col-md-8">
        <input type="text" name="First_Name" value="{{ $data->First_Name }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      
      <div class="form-group">
       <label class="col-md-4 text-right">Enter Last Name</label>
       <div class="col-md-8">
        <input type="text" name="Last_Name" value="{{ $data->Last_Name }}" class="form-control input-lg" />
       </div>
      </div>
      <br />

      <div class="form-group">
        <label class="col-md-4 text-right">Enter Email</label>
        <div class="col-md-8">
         <input type="text" name="Email" value="{{ $data->Email }}" class="form-control input-lg" />
        </div>
       </div>
       <br />

       <div class="form-group">
        <label class="col-md-4 text-right">Date of Birth</label>
        <div class="col-md-8">
         <input type="text" name="date_of_birth" value="{{ $data->date_of_birth }}" class="form-control input-lg" />
        </div>
       </div>
       <br />

       <div class="form-group">
        <label class="col-md-4 text-right">Enter Address</label>
        <div class="col-md-8">
         <input type="text" name="Address" value="{{ $data->Address }}" class="form-control input-lg" />
        </div>
       </div>
       <br />

       <div class="form-group">
        <label class="col-md-4 text-right">Enter Phone Number</label>
        <div class="col-md-8">
         <input type="text" name="Phone_Number" value="{{ $data->Phone_Number }}" class="form-control input-lg" />
        </div>
       </div>
       <br />
     
     
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>

@endsection
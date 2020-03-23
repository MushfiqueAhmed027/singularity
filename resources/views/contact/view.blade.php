@extends('layout')

@section('main')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('data.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <h3>First Name - {{ $data->First_Name }} </h3>
 <h3>Last Name - {{ $data->Last_Name }}</h3>
 <h3>Email - {{ $data->Email }} </h3>
 <h3>Date of Birth - {{ $data->date_of_birth }}</h3>
 <h3>Address - {{ $data->Address }} </h3>
 <h3>Phone_Number - {{ $data->Phone_Number }}</h3>
</div>
@endsection

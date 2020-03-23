@extends('layout')

@section('main')

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">First Name</th>
  <th width="10%">Last Name</th>
  <th width="10%">Email</th>
  <th width="10%">Date of Birth</th>
  <th width="30%">Address</th>
  <th width="20%">Phone Number</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->First_Name }}</td>
   <td>{{ $row->Last_Name }}</td>
   <td>{{ $row->Email }}</td>
   <td>{{ $row->date_of_birth }}</td>
   <td>{{ $row->Adderss }}</td>
   <td>{{ $row->Phone_Number }}</td>
   <td>
    
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection
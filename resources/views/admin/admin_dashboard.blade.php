@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <table class="table-stripped table table-bordered table-responsive mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    @if($data->role != 'admin')
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->first_name }}</td>
                        <td>{{ $data->middle_name }}</td>
                        <td>{{ $data->last_name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->role }}</td>
                        <td><span class="badge bg-success">{{ $data->status }}</span></td>
                        <td>
                           
                            <a href=" {{ route('update',$data->id) }}" class="btn btn-success">Update</a>
                            <a href="{{ route('delete',$data->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table> 
    </div>

</div>
   
@endsection
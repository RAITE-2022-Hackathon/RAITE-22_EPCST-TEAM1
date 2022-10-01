@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <form action="{{ url('admin/edit/update', $datas->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="" class="form-label">First Name</label>
                      <input type="text" class="form-control" name ="first_name" id="" value="{{ $datas->first_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name ="middle_name" id="" value="{{ $datas->middle_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name ="last_name" id="" value="{{ $datas->last_name }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                  </form>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($data as $value)
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-header">{{ $value->post_title }}</div>
                        <div class="card-body">
                            {{ $value->description }}
                            <div class="mt-3">
                                <small>{{ $value->date }}</small>
                                <div class="mt-3 ml-3">
                                    {{-- stored in db the total likes by user --}}
                                    <a href="#">Likes</a>
                                    {{-- get the id of user then post a name of a user --}}
                                    <a href="#">Comments</a>
                                    {{-- <a href="#"></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
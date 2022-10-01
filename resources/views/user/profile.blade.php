@extends('layouts.app')
@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body text-center">
                <i class="fa-sharp fa-solid fa-user" style="font-size:3rem"></i>
              <h5 class="my-3">{{$datas->first_name}}</h5>
              <p class="text-muted mb-1">{{$datas->last_name}}</p>
              <p class="text-muted mb-4">{{$datas->email}}</p>
            </div>
          </div>
          </div>
      </div>
    </div>
  </section>
    
@endsection
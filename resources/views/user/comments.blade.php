@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
      <div class="col-md-10">
          <div class="card">
              <div class="card-header"> <i class="fa-solid fa-circle-user"></i> {{ $data->post_title }}</div>
              <div class="card-body">
                  {{ $data->description }}
                  <div class="mt-3">
                      <small>Date: {{ $data->date }}</small>
                      <div class="mt-3 ml-3">
                          {{-- stored in db the total likes by user --}}
                          <a href="#">likes</a>
                          {{-- get the id of user then post a name of a user --}}
                          {{-- <a href="#"></a> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>
    <div class="row d-flex justify-content-center">
      <div class="col-lg-10 mt-4">
        <div class="card shadow-0 border" style="background-color: #f0f2f5;">
          <div class="card-body p-4">
            <div class="form-outline mb-4">
              <input type="text" id="addANote" class="form-control" placeholder="Type comment..." />
              <label class="form-label" for="addANote">+ Add a note</label>
            </div>
            <div>
            </div>
            <div class="card mb-4">
              <div class="card-body">
                <p>Type your note, and hit enter to add it</p>
    
                <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                        <i class="fa-solid fa-user"></i>
                    <p class="small mb-0 ms-2">Martha</p>
                  </div>
                  <div class="d-flex flex-row align-items-center">
                    <p class="small text-muted mb-0">Upvote?</p>
                    <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                    <p class="small text-muted mb-0">3</p>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="card mb-4">
              <div class="card-body">
                <p>Type your note, and hit enter to add it</p>
    
                <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                   <i class="fa-solid fa-user"></i>
                    <p class="small mb-0 ms-2">Johny</p>
                  </div>
                  <div class="d-flex flex-row align-items-center">
                    <p class="small text-muted mb-0">Upvote?</p>
                    <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                    <p class="small text-muted mb-0">4</p>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="card mb-4">
              <div class="card-body">
                <p>Type your note, and hit enter to add it</p>
    
                <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                  <i class="fa-solid fa-user"></i>
                    <p class="small mb-0 ms-2">Mary Kate</p>
                  </div>
                  <div class="d-flex flex-row align-items-center text-primary">
                    <p class="small mb-0">Upvoted</p>
                    <i class="fas fa-thumbs-up mx-2 fa-xs" style="margin-top: -0.16rem;"></i>
                    <p class="small mb-0">2</p>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="card">
              <div class="card-body">
                <p>Type your note, and hit enter to add it</p>
    
                <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                   <i class="fa-solid fa-user"></i>
                    <p class="small mb-0 ms-2">Johny</p>
                  </div>
                  <div class="d-flex flex-row align-items-center">
                    <p class="small text-muted mb-0">Upvote?</p>
                    <i class="far fa-thumbs-up ms-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@extends('layouts.css')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 30px;">
    	@foreach ($user as $users)
    	<div class="card-body">
                <form action="{{url('admin/update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$users->id}}">
                  <div class="form-row">
                  <div class="col-6">
                    <label>Nama</label>
                    <label class="sr-only" for="inlineFormInputGroup">Nama</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                      </div>  
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nama" name="nama" value="{{$users->name}}">
                    </div>
                  </div>
                  <div class="col-6">
                    <label>Email</label>
                    <label class="sr-only" for="inlineFormInputGroup">Email</label>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-at"></i></div>
                      </div>  
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email" name="email" value="{{$users->email}}">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="input-group mb-2">
                      <button type="submit" class="form-control" id="inlineFormInputGroup"><a href="" class="">
                        <i class="fa fa-paper-plane"></i>
                        Submit
                      </a></button>
                    </div>
                  </div>
                  <div class="col-1">
                    <div class="input-group mb-2">
                      <a href="{{url('admin/all')}}" class="form-control">Kembali</a>
                    </div>
                  </div>
                  </div>
                </form>
              </div>
    	@endforeach
	</div>
@endsection
